<?php

// Define a BankAccount class
class BankAccount {
    private $accountNumber;
    private $balance;

    // Constructor to initialize the account
    public function __construct($accountNumber, $initialBalance) {
        $this->accountNumber = $accountNumber;
        $this->balance = $initialBalance;
    }

    // Method to get the account number
    public function getAccountNumber() {
        return $this->accountNumber;
    }

    // Method to get the account balance
    public function getBalance() {
        return $this->balance;
    }

    // Method to deposit money into the account
    public function deposit($amount) {
        $this->balance += $amount;
        echo "Deposited $amount. New balance: $this->balance<br>";
    }

    // Method to withdraw money from the account
    public function withdraw($amount) {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
            echo "Withdrawn $amount. New balance: $this->balance<br>";
        } else {
            echo "Insufficient funds. Withdrawal unsuccessful.<br>";
        }
    }
}

// Create two bank accounts
$account1 = new BankAccount('123456', 1000);
$account2 = new BankAccount('789012', 500);

// Display initial account information
echo "Account 1 - Number: " . $account1->getAccountNumber() . ", Balance: " . $account1->getBalance() . "<br>";
echo "Account 2 - Number: " . $account2->getAccountNumber() . ", Balance: " . $account2->getBalance() . "<br>";

// Perform some transactions
$account1->deposit(200);
$account2->withdraw(100);

// Display updated account information
echo "Updated Account 1 - Balance: " . $account1->getBalance() . "<br>";
echo "Updated Account 2 - Balance: " . $account2->getBalance() . "<br>";

?>
