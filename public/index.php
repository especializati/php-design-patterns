<?php

use Core\Creational\Builder\Conceptual\Request\BuilderRequest;
use Core\Creational\Builder\Conceptual\Request\MethodsEnum;

require_once '../vendor/autoload.php';

// $request = new BuilderRequest;
// $request->url('http://localhost:8080/api/v1/users');
// $request->method(MethodsEnum::GET);
// $request->payload(['filters' => 'sdfsd']);
// $request->build();

$request = (new BuilderRequest)
            ->url('http://localhost:8080/api/v1/users')
            ->method(MethodsEnum::GET)
            ->build();