<?php

class PaymentHandler
{
    private int $accountBalance = 500;
    private int $creditCardBalance = 1000;

    public function processPayment($amount): void
    {
        switch ($amount) {
            case $this->accountBalance >= $amount: {
                echo "Оплата здійснюється з основного рахунку. Сума: $amount грн.\n";
                $this->accountBalance -= $amount;
                break;
            }
            case $this->creditCardBalance >= $amount: {
                echo "Оплата здійснюється з кредитної картки. Сума: $amount грн.\n";
                $this->creditCardBalance -= $amount;
                break;
            }
            default: {
                echo "Оплату відхилено: недостатньо коштів на рахунку та кредитній картці.\n";
            }
        }
    }
}

$handler = new PaymentHandler();

$handler->processPayment(500);
$handler->processPayment(1000);
$handler->processPayment(1100);