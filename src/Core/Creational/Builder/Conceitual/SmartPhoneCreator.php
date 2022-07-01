<?php

namespace Core\Creational\Builder\Conceptual;

class SmartPhoneCreator
{
    public function __construct(
        protected SmartPhoneBuilderInterface $smartPhone
    ) {}

    public function buildPhone()
    {
        $this->smartPhone->addGpu();
        $this->smartPhone->addCpu();
        $this->smartPhone->addRam();
        $this->smartPhone->addModel();
        $this->smartPhone->addSensors();
        
        return $this->smartPhone->getSmartPhone();
    }

    public function buildPhoneWithoutSensors()
    {
        $this->smartPhone->addGpu();
        $this->smartPhone->addCpu();
        $this->smartPhone->addRam();
        $this->smartPhone->addModel();
        
        return $this->smartPhone->getSmartPhone();
    }
}
