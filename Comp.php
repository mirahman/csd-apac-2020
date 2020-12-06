<?php 

class SecurityBase {

    public function anotherMethodForSecurityOnly() {

    }
}

class Base {
    public function someMethod() {

    }


}

class Log extends Base{
    public function setLog() {

    }
}

class Security extends Log {
    public function setSecurity() {

    }
}

class Audit extends Security {
    public function getSecurity() {
        
    }
}

class InfoSec extends Audit {

}

trait One {

}