<?php
/******************************************************************************
 * Copyright (C) 2017 Brian Retterer                                          *
 *                                                                            *
 *  This software may be modified and distributed under the terms             *
 *  of the MIT license.  See the LICENSE file for details.                    *
 ******************************************************************************/

namespace OpenApi\Console;

use OpenApi\Console\Commands\Test;
use Symfony\Component\Console\Application as SymfonyConsole;
use OpenApi\OpenApi;
use Symfony\Component\Console\Input\InputOption;

class Kernel extends SymfonyConsole
{
    protected $commands = [
        Test::class
    ];

    public function __construct()
    {
        parent::__construct(OpenApi::NAME, OpenApi::VERSION);

        $this->load();
    }

    public function load()
    {
        foreach($this->commands as $command) {
            $this->add(new $command);
        }
    }

    protected function getDefaultInputDefinition()
    {
        $inputDef =  parent::getDefaultInputDefinition();
        $inputDef->addOptions([
            new InputOption('--output', '-o', InputOption::VALUE_OPTIONAL, 'Set the output directory relative to project root'),
            new InputOption('--template-dir', '-t', InputOption::VALUE_OPTIONAL, 'Set the template directory relative to project root')
        ]);

        return $inputDef;
    }
}