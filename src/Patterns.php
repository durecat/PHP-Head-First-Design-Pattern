<?php

namespace Durecat\PhpHeadFirstDesignPatterns;

use Durecat\PhpHeadFirstDesignPatterns\Decorator\Decorator;

enum Patterns: string
{
    case DECORATOR = 'D';
    // case FACTORY = 'F';

    /**
    * Label
    *
    * @return string
    */
    public function label(): string
    {
        return match ($this) {
            static::DECORATOR => 'Decorator Pattern',
            // static::FACTORY => 'Factory Pattern',
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
            // static::Factory->value => new Factory(),
        };
    }
}
