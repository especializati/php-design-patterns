<?php

namespace Core\Creational\Builder\Practical\Enums;

enum Role: string
{
    case M = 'manager';
    case C = 'client';
    case D = 'dev';
    case T = 'tester';
    case F = 'founder';
}
