<?php
/******************************************************************************
 * Copyright (C) 2017 Brian Retterer                                          *
 *                                                                            *
 *  This software may be modified and distributed under the terms             *
 *  of the MIT license.  See the LICENSE file for details.                    *
 ******************************************************************************/

namespace OpenApi;

use Symfony\Component\Console\Application;

class OpenApi
{
    const NAME = "OpenAPI CodeGen";
    const VERSION = "0.1.0";

    public function run()
    {
        $app = new Application(self::NAME, self::VERSION);

        $app->addCommands();

        $app->run();
    }

}