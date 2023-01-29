<?php

namespace Durecat\PhpHeadFirstDesignPatterns\Factory\SimpleFactory;

abstract class Pizza
{
    protected $name;
    protected $dough;
    protected $sauce;
    protected $toppings = [];

    /**
    * prepare
    *
    * @return Pizza
    */
    public function prepare(): Pizza
    {
        printf("Preparing %s\n", $this->name);
        return $this;
    }

    /**
    * bake
    *
    * @return Pizza
    */
    public function bake(): Pizza
    {
        printf("Baking %s\n", $this->name);
        return $this;
    }

    /**
    * cut
    *
    * @return Pizza
    */
    public function cut(): Pizza
    {
        printf("Cutting %s\n", $this->name);
        return $this;
    }

    /**
    * box
    *
    * @return Pizza
    */
    public function box(): Pizza
    {
        printf("Boxing %s\n", $this->name);
        return $this;
    }

    /**
     * Get the value of name
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
    * toString
    *
    * @return string
    */
    public function toString(): string
    {
        return sprintf("---- %s ----\n %s\n %s\n %s\n\n", $this->name, $this->dough, $this->sauce, implode(', ', $this->toppings));
    }
}
