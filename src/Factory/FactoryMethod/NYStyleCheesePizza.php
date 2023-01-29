<?php

namespace Durecat\PhpHeadFirstDesignPatterns\Factory\FactoryMethod;

class NYStyleCheesePizza extends Pizza
{
    /**
    * Create a new NYStyleCheesePizza instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->name = 'NY Style Sauce and Cheese Pizza';
        $this->dough = 'Thin Crust Dough';
        $this->sauce = 'Marinara Sauce';

        $this->toppings[] = 'Grated Reggiano Cheese';
    }
}
