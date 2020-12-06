<?php 

class Notifcation {

    public $subscribers = [];
    public $notification = "";

    public function attach($obj) {
        $this->subcribers[] = $obj;
    }

    public function deattach($obj) {
        foreach($this->subcribers as $ind => $storedObj)
          {
              if($storedObj == $obj) {
                  unset($this->subcribers[$ind]);
              }
          }
    }


    public function setNotification($notification)
    {
        $this->notification = $notification;
    }

    public function sendNotification() 
    {
        foreach($this->subcribers as $subscriber)
          {
              $subscriber->notify($this->notification);
          }
    }
}

interface NoficiationChannel {
    public function notify($msg);
}

class SMSNotification implements NoficiationChannel{
    public function notify($msg)
    {
        echo "SMS Notifiction : ".$msg."\n";
    }
 }

 class WebNotification implements NoficiationChannel{
    public function notify($msg)
    {
        echo "Web Notifiction : ".$msg."\n";
    }
 }

 class EmailNotification implements NoficiationChannel{
    public function notify($msg)
    {
        echo "Email Notifiction : ".$msg."\n";
    }
 }

 $notifier = new Notifcation();
 $obj1 = new SMSNotification();
 $obj2 = new EmailNotification();
 $obj3 = new WebNotification();

$notifier->attach($obj1);
$notifier->attach($obj2);
$notifier->attach($obj3);
$notifier->setNotification("Your OTP for login is 1234.");
$notifier->sendNotification();
$notifier->deattach($obj2);
$notifier->deattach($obj3);
$notifier->setNotification("Your OTP for login is 7890.");
$notifier->sendNotification();