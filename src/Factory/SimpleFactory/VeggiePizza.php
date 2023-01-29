<?php

namespace Durecat\PhpHeadFirstDesignPatterns\Factory\SimpleFactory;

class VeggiePizza extends Pizza
{
    /**
    * Create a new VeggiePizza instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->name = 'Veggie Pizza';
        $this->dough = 'Crust';
        $this->sauce = 'Marinara sauce';
        array_push($this->toppings, 'Shredded mozzarella', 'Grated parmesan', 'Diced onion', 'Sliced mushrooms', 'Sliced red pepper', 'Sliced black olives');
    }
}
