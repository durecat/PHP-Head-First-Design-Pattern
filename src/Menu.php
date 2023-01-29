<?php

namespace Durecat\PhpHeadFirstDesignPatterns;

class Menu
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->menu();
    }


    /**
     * menu
     *
     * @return void
     */
    public function menu(): void
    {
        system('clear');
        $patterns = Patterns::cases();
        $response = NULL;
        while (TRUE) {
            printf("Select a pattern\n");
            foreach ($patterns as $pattern) {
                printf("\t[%s] %s\n", $pattern->value, $pattern->label());
            }
            printf("\t[%s] %s\n", 'C', 'Clear Screen');
            printf("\t[%s] %s\n", 'X', 'Exit');

            $response = strtoupper(readline('> '));
            
            if ($response === 'X') {
                break;
            } elseif ($response === 'C') {
                system('clear');
                continue;
            }
            
            Patterns::run($response);
            echo PHP_EOL;
        }
    }
}
