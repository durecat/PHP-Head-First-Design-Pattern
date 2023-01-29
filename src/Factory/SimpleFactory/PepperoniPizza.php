<?php

namespace Durecat\PhpHeadFirstDesignPatterns\Factory\SimpleFactory;

class PepperoniPizza extends Pizza
{
    /**
     * Constructor
     *
     * @return void
     */
    public function __construct()
    {
        $this->name = 'Pepperoni Pizza';
        $this->dough = 'Crust';
        $this->sauce = 'Marinara sauce';
        array_push($this->toppings, 'Sliced Pepperoni', 'Sliced onion', 'Grated parmesan cheese');
    }
}
