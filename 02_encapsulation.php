<?php
class BankAccount {
    private $balance;

    public function setBalance($amount) {
        if ($amount >= 0) {
            $this->balance = $amount;
        }
    }

    public function getBalance() {
        return $this->balance;
    }
}

$account = new BankAccount();
$account->setBalance(1000);
$balance = $account->getBalance();
echo "Balance: " . $balance . "<br>";
