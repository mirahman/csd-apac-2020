<?php 

class Notifier {

    public Notification $method;

    public function __construct(Notification $obj) {
        $this->method = $obj;
    }
}

interface Notification {
    public function notify();
}

class EmailNotification implements Notification {
    public function notify() {

    }
}

class SMSNotification implements Notification {
    public function notify() {

    }
}

class PushNotification implements Notification {
    public function notify() {

    }
}

$emailer = new EmailNotification();
$sms = new SMSNotification();
$postNotifier = new Notifier($sms);