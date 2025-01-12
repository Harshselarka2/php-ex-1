<?php
abstract class Payment {
    abstract public function makePayment();
}

class CreditCardPayment extends Payment {
    private $amount;

    public function __construct($amount) {
        $this->amount = $amount;
    }

    public function makePayment() {
        return "Paid ₹" . $this->amount . " using Credit Card.";
    }
}

class PayPalPayment extends Payment {
    private $amount;

    public function __construct($amount) {
        $this->amount = $amount;
    }

    public function makePayment() {
        return "Paid ₹" . $this->amount . " using PayPal.";
    }
}

$creditCardPayment = new CreditCardPayment(5000);
echo $creditCardPayment->makePayment();
echo "<br>";

$payPalPayment = new PayPalPayment(3000);
echo $payPalPayment->makePayment();
?>
