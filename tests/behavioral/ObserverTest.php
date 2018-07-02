<?php

use Behavioral\Observer\MailObserver;
use Behavioral\Observer\UserSubject;
use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{
    private $user;

    public function setUp()
    {
        $this->user = new UserSubject();
    }

    public function testCallToAttach()
    {
        $this->assertEquals($this->user->attach(new MailObserver()), null);
    }

    public function testCallToDetach()
    {
        $this->user->attach(new MailObserver());

        $this->assertEquals($this->user->detach(new MailObserver()), null);
    }
}
