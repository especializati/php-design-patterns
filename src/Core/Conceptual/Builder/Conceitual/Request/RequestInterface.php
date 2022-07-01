<?php

namespace Core\Creational\Builder\Conceptual\Request;

interface RequestInterface
{
    public function url(string $url): RequestInterface;
    public function payload(array $payload): RequestInterface;
    public function method(MethodsEnum $method): RequestInterface;
    public function build(): Request;
}
