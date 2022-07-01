<?php

use Core\Creational\Builder\Conceptual\ApplePhone;
use Core\Creational\Builder\Conceptual\SamsungPhone;
use Core\Creational\Builder\Conceptual\SmartPhoneBuilder;
use Core\Creational\Builder\Conceptual\SmartPhoneCreator;

require_once '../vendor/autoload.php';

$galaxy20 = new SmartPhoneBuilder(
    smartPhone: new SamsungPhone(),
    data: [
        'gpu' => 'XPTO',
        'cpu' => 'XPTO',
        'ram' => 12,
        'sensors' => ['XPTO'],
        'model' => 'XPTO',
    ]
);
$galaxy20->addGpu()
        ->addCpu()
        ->addRam();
$galaxy20->addModel();
$galaxy20->addSensors();
$galaxy20->getSmartPhone();

$smartPhone = new SmartPhoneBuilder(
    smartPhone: new ApplePhone(),
    data: [
        'gpu' => 'XPTO',
        'cpu' => 'XPTO',
        'ram' => 12,
        'sensors' => ['XPTO'],
        'model' => 'XPTO',
    ]
);
$smartPhoneCreator = new SmartPhoneCreator($smartPhone);
$iphone20 = $smartPhoneCreator->buildPhone();