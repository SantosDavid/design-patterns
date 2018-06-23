<?php

namespace Creational\FactoryMethod;

use Exception;
use Creational\FactoryMethod\Contracts\SmartphoneContract;
use Creational\FactoryMethod\Contracts\SmartphoneFactoryContract as Contract;

class SmartphoneFactory implements Contract
{
    private CONST NAMESPACE = 'Creational\FactoryMethod\\';

    public function create(String $smartphone): SmartphoneContract
    {
        $class = Self::NAMESPACE . $smartphone;

        if (!class_exists($class)) {
            throw new Exception('Class not found');
        }

        return new $class;
    }
}
