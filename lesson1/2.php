<?php

class Notifier
{
    private $channel = 'slack';

    public function notify($notification)
    {
        if ($this->channel == 'slack') {
            $this->sendViaSlack($notification);
        } elseif ($this->channel == 'email') {
            $this->sendViaEmail($notification);
        }
    }

    private function sendViaSlack($notification) {}
    private function sendViaEmail($notification) {}
}



$notification = new Notifier();

$notification->notify("Hello");
