<?php

use PHPUnit\Framework\TestCase;

use Structural\Facade\{OrderFacade, Stock, Order, Email};

class FacedeTest extends TestCase
{
    public function testFacade()
    {
        $facade = new OrderFacade(new Stock(), new Order(), new Email());

        return $this->assertTrue($facade->create([]));
    }

    public function testVerifyStockWithoutFacade()
    {
        $stock = new Stock();

        return $this->assertTrue($stock->verify([]));
    }

    public function testCreateOrderWithoutFacade()
    {
        $order = new Order();

        return $this->assertTrue($order->create([]));
    }

    public function testSendEmailWithoutFacade()
    {
        $email = new Email();

        return $this->assertTrue($email->newOrder('me@email.com', 'you@email.com', 'Hello World!'));
    }
}
