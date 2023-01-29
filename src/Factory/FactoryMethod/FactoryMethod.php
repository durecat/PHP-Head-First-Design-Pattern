<?php

namespace Durecat\PhpHeadFirstDesignPatterns\Factory\FactoryMethod;

class FactoryMethod
{
    /**
     * Constructor
     */
    public function __construct()
    {
        printf("\n<Factory Method Pattern>\n");
        $nyStore = new NYPizzaStore();
        $chicagoStore = new ChicagoPizzaStore();

        $pizza = $nyStore->orderPizza('cheese');
        printf("Ethan ordered a %s\n\n", $pizza->getName());

        $pizza = $chicagoStore->orderPizza('cheese');
        printf("Joel ordered a %s\n\n", $pizza->getName());
    }
}
