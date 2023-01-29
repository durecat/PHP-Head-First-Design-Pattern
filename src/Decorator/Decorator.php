<?php

namespace Durecat\PhpHeadFirstDesignPatterns\Decorator;

class Decorator
{
    /**
     * Constructor
     */
    public function __construct()
    {
        printf("\n<Decorator Pattern>\n");

        $beverage = new Espresso();
        printf("%s $%.2f \n", $beverage->getDescription(), $beverage->cost());

        $beverage2 = new DarkRoast();
        $beverage2 = new Mocha($beverage2);
        $beverage2 = new Mocha($beverage2);
        $beverage2 = new Whip($beverage2);
        printf("%s $%.2f \n", $beverage2->getDescription(), $beverage2->cost());

        $beverage3 = new HouseBlend();
        $beverage3 = new Soy($beverage3);
        $beverage3 = new Mocha($beverage3);
        $beverage3 = new Whip($beverage3);
        printf("%s $%.2f \n", $beverage3->getDescription(), $beverage3->cost());

        $beverage4 = (new HouseBlend())->setSize(Size::GRANDE);
        $beverage4 = new Soy($beverage4);
        $beverage4 = new Mocha($beverage4);
        $beverage4 = new Whip($beverage4);
        printf("%s $%.2f \n", $beverage4->getDescription(), $beverage4->cost());
    }
}
