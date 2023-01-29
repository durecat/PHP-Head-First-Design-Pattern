<?php

namespace Durecat\PhpHeadFirstDesignPatterns\Factory\SimpleFactory;

class SimpleFactory
{
    /**
     * Constructor
     */
    public function __construct()
    {
        printf("\n<Simple Factory>\n");
        $factory = new SimplePizzaFactory();
        $store = new PizzaStore($factory);

        $pizza = $store->orderPizza('cheese');
        printf("We ordered a %s\n", $pizza->getName());
        printf("%s\n", $pizza->toString());

        $pizza = $store->orderPizza('veggie');
        printf("We ordered a %s\n", $pizza->getName());
        printf("%s\n", $pizza->toString());
    }
}
