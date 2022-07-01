<?php

namespace Core\Creational\Builder\Practical;

final class Phone
{
    public function __construct(
        protected int $ddd,
        protected int $number,
        protected bool $active = true,
    ) {}
}
