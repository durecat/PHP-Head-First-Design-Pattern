<?php

namespace Durecat\PhpHeadFirstDesignPatterns\Factory\FactoryMethod;

class ChicagoStyleCheesePizza extends Pizza
{
    /**
    * Create a new NYStyleCheesePizza instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->name = 'Chicago Style Deep Dish Cheese Pizza';
        $this->dough = 'Extra Thick Crust Dough';
        $this->sauce = 'Plum Tomato Sauce';

        $this->toppings[] = 'Shredded Mozzarella Cheese';
    }

    /**
    * cut
    *
    * @return Pizza
    */
    public function cut(): Pizza
    {
        printf("Cutting the pizza into square slices\n");
        return $this;
    }
}
