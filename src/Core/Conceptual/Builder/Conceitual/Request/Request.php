<?php

namespace Core\Creational\Builder\Conceptual\Request;

class Request
{
    public function __construct(
        public ?string $url = '',
        public ?array $payload = [],
        public ?MethodsEnum $method = null,
    ) {}
}
