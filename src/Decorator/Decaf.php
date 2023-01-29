<?php

namespace Durecat\PhpHeadFirstDesignPatterns\Decorator;

class Decaf extends Beverage
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->description = 'Decaf';
    }

    /**
     * cost
     *
     * @return float
     */
    public function cost(): float
    {
        return 1.05;
    }
}
