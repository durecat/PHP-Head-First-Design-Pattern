<?php

namespace Durecat\PhpHeadFirstDesignPatterns\Factory\FactoryMethod;

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
        printf("Tossing %s\n", $this->dough);
        printf("Adding %s\n", $this->sauce);
        printf("Adding toppings:\n");
        foreach ($this->toppings as $topping) {
            // phpcs:ignore
            printf(" %s", $topping);
        }
        echo PHP_EOL;
        return $this;
    }

    /**
     * bake
     *
     * @return Pizza
     */
    public function bake(): Pizza
    {
        printf("Bake for 25 minutes at 350 \n");
        return $this;
    }

    /**
     * cut
     *
     * @return Pizza
     */
    public function cut(): Pizza
    {
        printf("Cutting the pizza into diagonal slices \n");
        return $this;
    }

    /**
     * box
     *
     * @return Pizza
     */
    public function box(): Pizza
    {
        printf("Place pizza in official PizzaStore box \n");
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
}
