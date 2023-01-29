<?php

namespace Durecat\PhpHeadFirstDesignPatterns\Decorator;

class HouseBlend extends Beverage
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->description = 'House Blend';
    }

    /**
     * cost
     *
     * @return float
     */
    public function cost(): float
    {
        return .89;
    }
}
