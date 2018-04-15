<?php

namespace DemoContract;

use PhpDeal\Annotation as Contract;

/**
 * Product
 *
 * Example with invariant
 *
 * @Contract\Invariant("$this->price >= 0")
 */
class Product
{

    /**
     * @var string
     */
    private $name = '';

    /**
     * @var float
     */
    private $price = 0.0;


    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }


    public function setPrice($price)
    {
        $this->price = $price;
    }


    public function price()
    {
        return $this->price;
    }

}