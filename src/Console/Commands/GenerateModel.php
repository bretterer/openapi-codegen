<?php
/******************************************************************************
 * Copyright (C) 2017 Brian Retterer                                          *
 *                                                                            *
 *  This software may be modified and distributed under the terms             *
 *  of the MIT license.  See the LICENSE file for details.                    *
 ******************************************************************************/

namespace OpenApi\Console\Commands;

use Symfony\Component\Console\Input\InputOption;

class GenerateModel extends Command
{
    protected $name = "generate:component";

    protected $description = "Generate all or single component with getters and setters";


    public function __construct()
    {
        parent::__construct();

        $this->addOption('--component', null, InputOption::VALUE_OPTIONAL, 'Set the compoent that you want to generate code for');
    }

    public function handle()
    {
        $this->parseSpec();
        var_dump($this->config);
    }

}