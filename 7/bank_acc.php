<?php
class BankAccount {
    private $accountNumber;
    private $balance;

    public function __construct($accountNumber, $initialBalance = 0) {
        $this->accountNumber = $accountNumber;
        $this->balance = $initialBalance;
    }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            return true;
        }
        return false;
    }

    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            return true;
        }
        return false;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function getAccountNumber() {
        return $this->accountNumber;
    }
}
?>

<?php
$account = new BankAccount("65145", 514);
$account->deposit(500); // Deposit 500
$account->withdraw(200); // Withdraw 200
echo "Account Number: " . $account->getAccountNumber() . "<br>";
echo "Balance: " . $account->getBalance(); // Display current balance
?>
