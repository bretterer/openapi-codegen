<?php
/******************************************************************************
 * Copyright (C) 2017 Brian Retterer                                          *
 *                                                                            *
 *  This software may be modified and distributed under the terms             *
 *  of the MIT license.  See the LICENSE file for details.                    *
 ******************************************************************************/

namespace OpenApi\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Test extends Command
{
    protected function configure()
    {
        $this
            ->setName('app:create-user')
            ->setDescription('Creates a new user.')
            ->setHelp('This command allows you to create a user...');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln([
            'User Creator',
            '============',
            '',
        ]);

        $output->writeln('Whoa!');

        $output->write('You are about to ');
        $output->write('create a user.');
    }
}