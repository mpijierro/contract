<?php

include 'vendor/autoload.php';

use PhpDeal\ContractApplication;


ContractApplication::getInstance()->init(array(
    'debug'    => true,
    'appDir'   => __DIR__,
    'cacheDir' => __DIR__.'/cache/',
    'includePaths' => [__DIR__],
    'excludePaths' => [__DIR__.'/vendor/']
));


$product = new DemoContract\Product('Ball', 0);
$product->setPrice(2);

echo "<br>Precio: " . $product->name();
echo "<br>Precio: ".$product->price();


// this method that does not satisfy the class invariant
//$product->breakInvariantToExit();