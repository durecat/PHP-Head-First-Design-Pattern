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
    * description
    *
    * @return array
    */
    public function description(): array
    {
        return match ($this) {
            static::DECORATOR => [
                'desc' => 'Decorator is a structural design pattern that lets you attach new behaviors to objects by placing these objects inside special wrapper objects that contain the behaviors.',
                'link' => 'https://refactoring.guru/design-patterns/decorator',
            ],
            static::SIMPLE_FACTORY =>
            [
                'desc' => 'The Simple factory pattern describes a class that has one creation method with a large conditional that based on method parameters chooses which product class to instantiate and then return.',
                'link' => 'https://refactoring.guru/design-patterns/factory-comparison#:~:text=In%20most%20cases%2C%20a%20simple,of%20the%20method%20to%20subclasses.',
            ],
            static::FACTORY_METHOD => [
                'desc' => 'Factory Method is a creational design pattern that provides an interface for creating objects in a superclass, but allows subclasses to alter the type of objects that will be created.',
                'link' => 'https://refactoring.guru/design-patterns/factory-method',
            ],
            static::ABSTRACT_FACTORY => [
                'desc' => 'Abstract Factory is a creational design pattern that lets you produce families of related objects without specifying their concrete classes.',
                'link' => 'https://refactoring.guru/design-patterns/abstract-factory',
            ],
        };
    }
}
