<?php

namespace Structural\Facade;

class OrderFacade
{
    private $stock;
    private $order;
    private $email;

    public function __construct(Stock $stock, Order $order, Email $email)
    {
        $this->stock = $stock;
        $this->order = $order;
        $this->email = $email;
    }

    public function create(Array $products) : bool
    {
        if (!$this->stock->verify([])) {
            return false;
        }

        if (!$this->order->create([])) {
            return false;
        }

        $this->email->newOrder('me@email.com', 'you@email.com', 'Hello World!');

        return true;
    }
}