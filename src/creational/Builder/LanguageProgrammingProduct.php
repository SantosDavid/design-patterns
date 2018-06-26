<?php

namespace Creational\Builder;

class LanguageProgrammingProduct
{
    protected $name;
    protected $types;

    public function setName(String $name)
    {
        $this->name = $name;
    }

    public function setTypes(Array $types)
    {
        $this->types = $types;
    }

    public function name() : String
    {
        return $this->name;
    }

    public function types() : Array
    {
        return $this->types;
    }
}