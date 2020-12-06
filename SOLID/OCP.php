<?php 

interface PaymentType {
    public function getFee();
}

class CreditCardPayment implements PaymentType {
    public function getFee( ) {
        return 3.5;
    }
}

class CashPayment implements PaymentType {
    public function getFee( ) {
        return 0;
    }
}

class BkashPayment implements PaymentType {
    public function getFee( ) {
        return 2;
    }
}

class NagadPayment implements PaymentType {
    public function getFee( ) {
        return 1.0;
    }
}
