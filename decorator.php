<?php

require_once __DIR__ . '/vendor/autoload.php';

use Durecat\PhpHeadFirstDesignPatterns\Decorator\DarkRoast;
use Durecat\PhpHeadFirstDesignPatterns\Decorator\Espresso;
use Durecat\PhpHeadFirstDesignPatterns\Decorator\HouseBlend;
use Durecat\PhpHeadFirstDesignPatterns\Decorator\Mocha;
use Durecat\PhpHeadFirstDesignPatterns\Decorator\Soy;
use Durecat\PhpHeadFirstDesignPatterns\Decorator\Whip;

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
