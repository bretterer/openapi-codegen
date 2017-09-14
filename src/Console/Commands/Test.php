<?php
/******************************************************************************
 * Copyright (c) 2017 Brian Retterer                                          *
 *                                                                            *
 * This software may be modified and distributed under the terms              *
 * of the MIT license. See the LICENSE file for details.                      *
 ******************************************************************************/

namespace OpenApi\Console\Commands;

class Test extends Command
{
    protected $name = "test:this";

    protected $description = "Some Description";

    public function handle()
    {
        print 'hello';
    }
}