<?php

namespace Durecat\PhpHeadFirstDesignPatterns\Decorator;

abstract class Beverage
{
    protected string $description = '';

    /**
     * getDescription
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * cost
     *
     * @return float
     */
    abstract public function cost(): float;
}
