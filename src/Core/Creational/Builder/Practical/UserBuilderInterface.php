<?php

namespace Core\Creational\Builder\Practical;

use Core\Creational\Builder\Practical\Enums\Role;

interface UserBuilderInterface
{
    public function reset(): void;
    public function addBasicInfo(
        string $firstName,
        string $lastName,
        string $email,
        int $age,
        Role $role,
        bool $active = false,
    ): UserBuilderInterface;
    public function addAddress(
        string $street,
        string $city,
        string $state,
        int $postalCode,
        string $country,
    ) : UserBuilderInterface;
    public function addPhone(
        int $ddd,
        int $number,
        bool $active = true,
    ) : UserBuilderInterface;
    public function build(): User;
}
