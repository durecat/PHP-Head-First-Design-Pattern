<?php

namespace Durecat\PhpHeadFirstDesignPatterns;

use Durecat\PhpHeadFirstDesignPatterns\Decorator\Decorator;
use Durecat\PhpHeadFirstDesignPatterns\Factory\FactoryMethod\FactoryMethod;
use Durecat\PhpHeadFirstDesignPatterns\Factory\SimpleFactory\SimpleFactory;
use Durecat\PhpHeadFirstDesignPatterns\Factory\AbstractFactory\AbstractFactory;

enum Patterns: string
{
    case DECORATOR = 'D';
    case SIMPLE_FACTORY = 'F1';
    case FACTORY_METHOD = 'F2';
    case ABSTRACT_FACTORY = 'F3';

    /**
    * Label
    *
    * @return string
    */
    public function label(): string
    {
        return match ($this) {
            static::DECORATOR => 'Decorator Pattern',
            static::SIMPLE_FACTORY => 'Simple Factory',
            static::FACTORY_METHOD => 'Factory Method Pattern',
            static::ABSTRACT_FACTORY => 'Abstract Factory Pattern',
        };
    }

    /**
    * Run
    *
    * @param string $patternValue
    * @return void
    */
    public static function run(string $patternValue): void
    {
        match ($patternValue) {
            static::DECORATOR->value => new Decorator(),
            static::SIMPLE_FACTORY->value => new SimpleFactory(),
            static::FACTORY_METHOD->value => new FactoryMethod(),
            static::ABSTRACT_FACTORY->value => new AbstractFactory(),
        };
    }
}
