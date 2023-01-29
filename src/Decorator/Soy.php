<?php

namespace Durecat\PhpHeadFirstDesignPatterns\Decorator;

class Soy extends CondimentDecorator
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
        return $this->beverage->getDescription() . ', Soy';
    }

    /**
    * cost
    *
    * @return float
    */
    public function cost(): float
    {
        return $this->beverage->cost() + .15;
    }
}
