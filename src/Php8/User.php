<?php

namespace App\Php8;

class User
{
    /**
     * User constructor.
     *
     * @param string    $name
     * @param string    $secondName
     * @param string    $age
     * @param int|float $money
     * @param mixed     $someMixed
     */
    public function __construct(
        public string $name,
        public string $secondName,
        public string $age,
        public int|float $money = 100,
        protected mixed $someMixed = null
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
    public function setNamedArguments(string $name, string $secondName = '', int $age = 0): self
    {
        $this->name       = $name;
        $this->secondName = $secondName;
        $this->age        = $age;

        return $this;
    }

    /**
     * Here we can see the usage of the Unit types.
     * In case we pass attribute 'string', null or something else we should get the error
     *
     * @param int|float $money
     *
     * @return $this
     */
    public function setMoney(int|float $money): self
    {
        $this->money = $money;

        return $this;
    }


    /**
     * @param mixed $x
     *
     * @return mixed
     */
    public function setSomething(mixed $x): mixed
    {
        return $x;
    }

    /**
     * @return mixed
     */
    public function getSomeMixed(): mixed
    {
        return $this->someMixed;
    }
}
