<?php

namespace Durecat\PhpHeadFirstDesignPatterns\Decorator;

abstract class Beverage
{
    protected Size $size = Size::TALL;
    protected string $description = '';

    /**
     * getDescription
     *
     * @return string
     */
    public function getDescription(): string
    {
        return "{$this->description} {$this->size->value}";
    }

    /**
     * cost
     *
     * @return float
     */
    abstract public function cost(): float;

    /**
     * Get the value of size
     *
     * @return Size
     */
    public function getSize(): Size
    {
        return $this->size;
    }

    /**
     * Set the value of size
     *
     * @param Size $size
     * @return  self
     */
    public function setSize(Size $size)
    {
        $this->size = $size;

        return $this;
    }
}
