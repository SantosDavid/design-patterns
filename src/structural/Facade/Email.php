<?php

namespace Structural\Facade;

class Email
{
    public function newOrder($from, $to, $message) : bool
    {
        return true;
    }
}