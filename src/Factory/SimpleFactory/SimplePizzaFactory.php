<?php

namespace Durecat\PhpHeadFirstDesignPatterns\Factory\SimpleFactory;

class SimplePizzaFactory
{
    /**
    * createPizza
    *
    * @param string $type
    *
    * @return Pizza
    */
    public function createPizza(string $type): Pizza
    {
        return match ($type) {
            'cheese' => new CheesePizza(),
            'pepperoni' => new PepperoniPizza(),
            'clam' => new ClamPizza(),
            'veggie' => new VeggiePizza(),
        };
    }
}
