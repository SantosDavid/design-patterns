<?php

namespace Creational\FactoryMethod\Contracts;

interface SmartphoneFactoryContract
{
    public function create(string $smartphone): SmartphoneContract;
}
