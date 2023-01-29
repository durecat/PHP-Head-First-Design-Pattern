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
        $cost = $this->beverage->cost();

        switch ($this->beverage->getSize()) {
            case Size::TALL:
                $cost += .10;
                break;
            case Size::GRANDE:
                $cost += .15;
                break;
            case Size::VENTI:
                $cost += .20;
                break;
        }

        return $cost;
    }
}
