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


$product = new DemoContract\Product('Ball', 'a');
$product->setPrice(2);

echo "<br>Precio: " . $product->name();
echo "<br>Precio: ".$product->price();

/**
 * output => ..
 *
 *
 * Fatal error: Uncaught DomainException: Invalid return value received from the assertion body, only boolean or void can be returned in
 * /var/www/html/contract/vendor/php-deal/framework/src/Aspect/AbstractContractAspect.php:86
 * Stack trace: #0 /var/www/html/contract/vendor/php-deal/framework/src/Aspect/InvariantCheckerAspect.php(57):
 * PhpDeal\Aspect\AbstractContractAspect->ensureContracts(Object(Go\Aop\Framework\DynamicClosureMethodInvocation), Array, Object(DemoContract\Product),
 * 'DemoContract\\Pr...', Array) #1 /var/www/html/contract/vendor/goaop/framework/src/Aop/Framework/AroundInterceptor.php(34):
 * PhpDeal\Aspect\InvariantCheckerAspect->invariantContract(Object(Go\Aop\Framework\DynamicClosureMethodInvocation)) #2
 * /var/www/html/contract/vendor/goaop/framework/src/Aop/Framework/DynamicClosureMethodInvocation.php(42):
 * Go\Aop\Framework\AroundInterceptor->invoke(Object(Go\Aop\Framework\DynamicClosureMethodInvocation))
 * #3 /var/www/html/contract/vendor/goaop/framework/src/Aop/Framework/AbstractMethodInvocation.php(89): Go\Aop\Fra in /var/www/html/contract/Product.php on line 36
 */