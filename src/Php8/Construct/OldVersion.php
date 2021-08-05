<?php

namespace App\Php8\Construct;

class OldVersion
{
    private string $name;

    /**
     * OldVersion constructor.
     *
     * @param string $name
     */
    public function __construct(
        string $name
    ) {
        $this->name = $name;
    }
}
