<?php

namespace Core\Creational\Builder\Conceptual;

interface SmartPhoneBuilderInterface
{
    public function reset(): void;
    public function addGpu(): SmartPhoneBuilderInterface;
    public function addCpu(): SmartPhoneBuilderInterface;
    public function addRam(): SmartPhoneBuilderInterface;
    public function addSensors(): SmartPhoneBuilderInterface;
    public function addModel(): SmartPhoneBuilderInterface;
    public function getSmartPhone(): SmartPhone;
}
