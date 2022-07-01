<?php

namespace Core\Creational\Builder\Conceptual;

class SmartPhoneBuilder implements SmartPhoneBuilderInterface
{
    public function __construct(
        protected SmartPhone $smartPhone,
        protected array $data,
    ) {

    }

    public function reset(): void
    {

    }

    public function addGpu(): SmartPhoneBuilderInterface
    {
        $this->smartPhone->gpu = $this->data['gpu'];

        return $this;
    }

    public function addCpu(): SmartPhoneBuilderInterface
    {
        $this->smartPhone->cpu = $this->data['cpu'];

        return $this;
    }

    public function addRam(): SmartPhoneBuilderInterface
    {
        $this->smartPhone->ram = $this->data['ram'];

        return $this;
    }

    public function addSensors(): SmartPhoneBuilderInterface
    {
        $this->smartPhone->sensors = $this->data['sensors'];

        return $this;
    }

    public function addModel(): SmartPhoneBuilderInterface
    {
        $this->smartPhone->model = $this->data['model'];

        return $this;
    }

    public function getSmartPhone(): SmartPhone
    {
        return $this->smartPhone;
    }

}
