<?php

namespace Durecat\PhpHeadFirstDesignPatterns\Factory\FactoryMethod;

abstract class PizzaStore
{
    /**
    * orderPizza
    *
    * @param string $type
    *
    * @return Pizza
    */
    public function orderPizza(string $type): Pizza
    {
        $pizza = $this->createPizza($type);
        printf("--- Making a %s ---\n", $pizza->getName());
        return $pizza->prepare()
            ->bake()
            ->cut()
            ->box();
    }

    /**
     * createPizza
     * @param string $type
     * @return Pizza|null
     */
    abstract public function createPizza(string $type): Pizza|null;
}
