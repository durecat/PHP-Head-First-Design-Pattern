<?php

namespace Durecat\PhpHeadFirstDesignPatterns\Decorator;

class DarkRoast extends Beverage
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->description = 'Dark Roast';
    }

    /**
     * cost
     *
     * @return float
     */
    public function cost(): float
    {
        return .99;
    }
}
