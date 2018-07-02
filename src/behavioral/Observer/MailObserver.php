<?php

namespace Behavioral\Observer;

use SplObserver;
use SplSubject;

class MailObserver implements SplObserver
{
    public function update(SplSubject $subject)
    {
        echo 'Mail send to new user';
    }
}