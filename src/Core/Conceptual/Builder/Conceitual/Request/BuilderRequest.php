<?php

namespace Core\Creational\Builder\Conceptual\Request;

class BuilderRequest implements RequestInterface
{
    protected Request $request;

    public function __construct()
    {
        $this->request = new Request();
    }

    public function url(string $url): RequestInterface
    {
        $this->request->url = $url;

        return $this;
    }

    public function payload(array $payload): RequestInterface
    {
        $this->request->payload = $payload;

        return $this;
    }

    public function method(MethodsEnum $method): RequestInterface
    {
        $this->request->method = $method;

        return $this;
    }

    public function build(): Request
    {
        return $this->request;
    }    
}
