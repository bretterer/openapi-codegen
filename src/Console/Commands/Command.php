<?php
/******************************************************************************
 * Copyright (c) 2017 Brian Retterer                                          *
 *                                                                            *
 * This software may be modified and distributed under the terms              *
 * of the MIT license. See the LICENSE file for details.                      *
 ******************************************************************************/

namespace OpenApi\Console\Commands;

use Symfony\Component\Console\Command\Command as SymfonyCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

abstract class Command extends SymfonyCommand
{
    protected $name;

    protected $description;

    public function __construct()
    {
        parent::__construct($this->name);
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        return $this->handle();
    }

    abstract public function handle();

}