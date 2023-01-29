<?php

namespace Durecat\PhpHeadFirstDesignPatterns\Factory\SimpleFactory;

class ClamPizza extends Pizza
{
    /**
     * Constructor
     *
     * @return void
     */
    public function __construct()
    {
        $this->name = 'Clam Pizza';
        $this->dough = 'Thin crust';
        $this->sauce = 'White garlic sauce';
        array_push($this->toppings, 'Clams', 'Grated parmesan cheese');
    }
}
