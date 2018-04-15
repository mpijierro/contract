<?php

use PhpDeal\ContractApplication;

ContractApplication::getInstance()->init(array(
    'debug'    => true,
    'appDir'   => __DIR__,
    'cacheDir' => __DIR__.'/cache/',
    //'includePaths' => [__DIR__],
    //'excludePaths' => [__DIR__.'/vendor']
));