<?php
/******************************************************************************
 * Copyright (c) 2017 Brian Retterer                                          *
 *                                                                            *
 * This software may be modified and distributed under the terms              *
 * of the MIT license. See the LICENSE file for details.                      *
 ******************************************************************************/

namespace OpenApi\Console\Commands;

use Symfony\Component\Console\Command\Command as SymfonyCommand;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Yaml\Parser;
use Symfony\Component\Yaml\Yaml;

abstract class Command extends SymfonyCommand
{
    protected $name;

    protected $description;

    protected $helpText;

    /**
     * @var OutputInterface
     */
    protected $output;
    protected $config;
    protected $filesystem;
    protected $yamlParser;
    protected $spec;

    public function __construct()
    {
        parent::__construct($this->name);

        $this->setDescription($this->description);
        $this->setHelp($this->helpText);

        $this->filesystem = new Filesystem();
        $this->yamlParser = new Parser();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->output = $output;

        $this->parseConfig();

        if(method_exists($this, 'handle')){
            return $this->handle();
        }

    }

    abstract public function handle();

    private function parseConfig()
    {
        $this->config = $this->yamlParser->parse(file_get_contents('.codegen.yml'));

        if($this->filesystem->exists('.codegen.yml')){
            $customConfig = $this->yamlParser->parse(file_get_contents(__DIR__ . '/../../../.codegen.yml'));
            $this->config = array_replace_recursive($this->config, $customConfig);
        }
    }

    protected function parseSpec()
    {
        var_dump(OPENAPI_ROOT_FOLDER);
        if(!key_exists('specFile', $this->config) || !$this->filesystem->exists(__DIR__ . "/../../../../../../{$this->config['specFile']}")){
            $this->output->writeln('<error>Could not find spec file </error>');
            exit(0);
        }

        $this->spec = $this->yamlParser->parse(file_get_contents(__DIR__ . "/../../../../../../{$this->config['specFile']}"));

    }




}