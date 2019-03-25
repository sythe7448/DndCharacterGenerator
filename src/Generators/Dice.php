<?php

/**
 * A random number generator based on dice size.
 *
 * Class Dice
 */
class Dice
{
    public function d4 (): int
    {
        return random_int(1, 4);

    }

    public function d6 (): int
    {
        return random_int(1, 6);

    }

    public function d10 (): int
    {
        return random_int(1, 10);
    }

    public function d20 (): int
    {
        return random_int(1, 20);
    }

    public function d100 (): int
    {
        return random_int(1, 100);
    }
}