<?php 

class ExternalAPI {

    public function getData($name) {
        return "I am sending data from external api for ".$name;
    }
}

class ProxyService {
    public $cachedArray = [];
    public function getData($name = "")
    {
        if(! isset($this->cachedArray[$name])) {
            $api = new ExternalAPI();
            $this->cachedArray[$name] = $api->getData($name);
        } else {
            echo  "Returning from cached data \n";
        }

        return $this->cachedArray[$name];
    }
}

class ProxyConnect {

    public static $db = null;
    private function __construct() {
    }

    private function __clone() {
    }


    public static function getInstance() {

        if(is_null(self::$db)) {
            self::$db = new ProxyService();
        }
        return self::$db;
    }
}


class APIConsumer {
    public static $api;
    public static function callAPI($name = "") {
        self::$api = ProxyConnect::getInstance();
        echo self::$api->getData($name)." \n ";
    }
}

APIConsumer::callAPI('Mizan');
APIConsumer::callAPI('Linkon');
APIConsumer::callAPI('Abrar');
APIConsumer::callAPI('Mizan');
APIConsumer::callAPI('Linkon');
APIConsumer::callAPI('Abrar');
APIConsumer::callAPI('Mizan');
APIConsumer::callAPI('Linkon');
APIConsumer::callAPI('Abrar');
APIConsumer::callAPI('Mizan');
APIConsumer::callAPI('Linkon');
APIConsumer::callAPI('Abrar');
/*
APIConsumer::callAPI('Mizan');
APIConsumer::callAPI('Abrar');
*/
