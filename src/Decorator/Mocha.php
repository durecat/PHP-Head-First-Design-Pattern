<?php

namespace Durecat\PhpHeadFirstDesignPatterns\Decorator;

class Mocha extends CondimentDecorator
{
    /**
     * Constructor
     *
     * @param Beverage $beverage
     */
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    /**
    * getDescription
    *
    * @return string
    */
    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ', Mocha';
    }

    /**
    * cost
    *
    * @return float
    */
    public function cost(): float
    {
        return $this->beverage->cost() + .20;
    }
}
