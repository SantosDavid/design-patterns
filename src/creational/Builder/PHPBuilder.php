<?php

namespace Creational\Builder;

class PHPBuilder extends LanguageBuilder
{
    private CONST name = 'PHP';

    private CONST types = [
        'float',
        'integer',
        'string',
        'boolean',
        'null',
        'object',
        'resource',
    ];

    public function buildName()
    {
        $this->language->setName(Self::name);
    }

    public function buildTypes()
    {
        $this->language->setTypes(Self::types);
    }
}