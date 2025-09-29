<?php
abstract class PaymentGateway {
    abstract public function processPayment($amount);

    public function showTransaction($amount) {
        echo "Processing $$amount...<br>";
    }
}

class PayPal extends PaymentGateway {
    public function processPayment($amount) {
        echo "Paid $$amount via PayPal<br>";
    }
}

$payment = new PayPal();
$payment->showTransaction(100);
$payment->processPayment(100);
