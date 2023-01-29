<?php

namespace Durecat\PhpHeadFirstDesignPatterns\Factory\SimpleFactory;

class PizzaStore
{
    public SimplePizzaFactory $factory;

    /**
    * Constructor
    *
    * @param SimplePizzaFactory $factory
    * @return void
    */
    public function __construct(SimplePizzaFactory $factory)
    {
        $this->factory = $factory;
    }

    /**
    * orderPizza
    *
    * @param string $type
    *
    * @return Pizza
    */
    public function orderPizza(string $type): Pizza
    {
        $pizza = $this->factory->createPizza($type);

        return $pizza->prepare()
            ->bake()
            ->cut()
            ->box();
    }
}
