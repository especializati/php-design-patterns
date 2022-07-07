<?php

// use Core\Creational\Builder\Practical\Address;
// use Core\Creational\Builder\Practical\Enums\Role;
// use Core\Creational\Builder\Practical\Phone;
// use Core\Creational\Builder\Practical\User;

use Core\Creational\Builder\Practical\Enums\Role;
use Core\Creational\Builder\Practical\UserBuilder;
use Core\Creational\Singleton\Conceitual\Singleton;

require_once '../vendor/autoload.php';

// $carlosFounder = new User(
//     firstName: 'Carlos',
//     lastName: 'Ferreira',
//     email: 'carlos@especializati.com.br',
//     age: 29,
//     role: Role::F,
// );
// $carlosFounder->setAddress(
//     new Address(
//         street: 'Rua x',
//         city: 'City X',
//         state: 'State X',
//         postalCode: 5757009,
//         country: 'BR',
//     )
// );
// $carlosFounder->setPhone(
//     new Phone(
//         ddd: 64,
//         number: 981701406,
//     )
// );
// $user = (new UserBuilder)
//             ->addBasicInfo(
//                 firstName: 'Carlos',
//                 lastName: 'Ferreira',
//                 email: 'carlos@especializati.com.br',
//                 age: 29,
//                 role: Role::F,
//             )
//             ->addAddress(
//                 street: 'Rua x',
//                 city: 'City X',
//                 state: 'State X',
//                 postalCode: 5757009,
//                 country: 'BR',
//             )
//             ->addPhone(
//                 ddd: 64,
//                 number: 981701406,
//             )
//             ->build();

/**
 * Singleton Conceitual
 */
$instanceA = Singleton::getInstance();
$instanceB = Singleton::getInstance();
var_dump($instanceA === $instanceB);
