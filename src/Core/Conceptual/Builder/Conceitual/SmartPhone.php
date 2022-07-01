<?php

namespace Core\Creational\Builder\Conceptual;

abstract class SmartPhone
{
    public function __construct(
        protected ?string $gpu = null,
        protected ?string $cpu = null,
        protected ?int $ram = null,
        protected ?array $sensors = null,
        protected ?string $model = null,
    ) {
        // $this->validate();
    }

    public function __set($name, $value)
    {
        $this->{$name} = $value;
    }

    public function __get($name)
    {
        return $this->{$name};
    }
}
