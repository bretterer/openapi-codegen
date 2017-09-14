<?php

use OpenApi\OpenApi;

$openApi = new OpenApi();

$openApi->add(
    'filesystem',
    \Symfony\Component\Filesystem\Filesystem::class
);

$openApi->run();
