<?php

namespace Durecat\PhpHeadFirstDesignPatterns\Factory\FactoryMethod;

class ChicagoPizzaStore extends PizzaStore
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
            'cheese' => new ChicagoStyleCheesePizza(),
            'pepperoni' => new ChicagoStylePepperoniPizza(),
            'clam' => new ChicagoStyleClamPizza(),
            'veggie' => new ChicagoStyleVeggiePizza(),
        };
    }
}
