<?php

namespace Durecat\PhpHeadFirstDesignPatterns\Factory\FactoryMethod;

class NYPizzaStore extends PizzaStore
{
    /**
    * createPizza
    *
    * @param string $item
    *
    * @return Pizza|null
    */
    public function createPizza(string $item): Pizza|null
    {
        return match ($item) {
            'cheese' => new NYStyleCheesePizza(),
            'pepperoni' => new NYStylePepperoniPizza(),
            'clam' => new NYStyleClamPizza(),
            'veggie' => new NYStyleVeggiePizza(),
        };
    }
}
