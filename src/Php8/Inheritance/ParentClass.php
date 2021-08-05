<?php

namespace App\Php8\Inheritance;

class ParentClass
{
    public static function getSelf(): self
    {
        return new self();
    }

    public static function getStatic(): static
    {
        return new static();
    }
}
