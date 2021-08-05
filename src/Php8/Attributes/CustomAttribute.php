<?php

namespace App\Php8\Attributes;

use Attribute;

#[Attribute]
class CustomAttribute
{
    public function __construct(protected int $specialAttribute = 100)
    {
    }
}
