<?php

use Symfony\Component\Console\Application;

$application = new Application('OpenApi Codegen', '0.1.0');

$application->add(new \OpenApi\Commands\Test());

$application->run();
