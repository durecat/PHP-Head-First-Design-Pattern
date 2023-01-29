<?php

namespace Durecat\PhpHeadFirstDesignPatterns\Decorator;

use Durecat\PhpHeadFirstDesignPatterns\Decorator\Beverage;

abstract class CondimentDecorator extends Beverage
{
    protected Beverage $beverage;
}
