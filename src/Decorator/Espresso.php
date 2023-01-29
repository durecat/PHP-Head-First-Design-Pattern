<?php

namespace Durecat\PhpHeadFirstDesignPatterns\Decorator;

class Espresso extends Beverage
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->description = 'Espresso';
    }

    /**
    * cost
    *
    * @return float
    */
    public function cost(): float
    {
        return 1.99;
    }
}
