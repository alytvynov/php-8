<?php

namespace App\Php8;

class App
{
    /**
     * App constructor.
     *
     * @param string $name
     * @param string $secondName
     * @param string $age
     */
    public function __construct(
        public string $name,
        public string $secondName,
        public string $age,
    ) {
    }

    public static function new(...$args): self
    {
        return new self(...$args);
    }

    /**
     * @param string $name
     * @param string $secondName
     * @param int    $age
     *
     * @return $this
     */
    public function setNamedArguments(string $name = '', string $secondName = '', int $age = 0): self
    {
        $this->name       = $name;
        $this->secondName = $secondName;
        $this->age        = $age;

        return $this;
    }
}
