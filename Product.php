<?php

namespace DemoContract;

use PhpDeal\Annotation as Contract;

/**
 * Product
 *
 * Example with invariant
 *
 * @Contract\Invariant("!empty($this->name)")
 * @Contract\Invariant("is_numeric($this->price)")
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


    public function __construct(string $name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }


    public function setPrice($price)
    {
        $this->price = $price;
    }


    public function name(): string
    {
        return $this->name;
    }

    public function price(): string
    {
        return $this->price;
    }

}