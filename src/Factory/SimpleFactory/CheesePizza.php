<?php

namespace Durecat\PhpHeadFirstDesignPatterns\Factory\SimpleFactory;

class CheesePizza extends Pizza
{
    /**
     * Constructor
     *
     * @return void
     */
    public function __construct()
    {
        $this->name = 'Cheese Pizza';
        $this->dough = 'Regular Crust';
        $this->sauce = 'Marinara sauce';
        array_push($this->toppings, 'Fresh Mozzarella', 'Parmesan');
    }
}
