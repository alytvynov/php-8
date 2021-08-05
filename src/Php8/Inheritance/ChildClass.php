<?php

namespace App\Php8\Inheritance;

class ChildClass extends ParentClass
{
    public static function getParent(): parent
    {
        return new parent();
    }
}
