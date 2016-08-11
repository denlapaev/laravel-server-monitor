<?php

namespace EricMakesStuff\ServerMonitor\Notifications\Senders;

use Illuminate\Contracts\Logging\Log as LogContract;
use EricMakesStuff\ServerMonitor\Notifications\BaseSender;

class Sentry extends BaseSender
{
    protected $sentry;

    public function __construct(Sentry $sentry)
    {
        $this->sentry = $sentry;
    }

    public function send()
    {
        $this->sentry->captureMessage("{$this->subject}: {$this->message}");
    }
}
