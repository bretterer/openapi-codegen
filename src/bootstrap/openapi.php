<?php
/******************************************************************************
 * Copyright (c) 2017 Brian Retterer                                          *
 *                                                                            *
 * This software may be modified and distributed under the terms              *
 * of the MIT license. See the LICENSE file for details.                      *
 ******************************************************************************/

use OpenApi\OpenApi;

$openApi = new OpenApi();

$console = new \OpenApi\Console\Kernel();
$console->run();
