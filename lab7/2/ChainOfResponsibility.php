<?php

interface Handler {
    function setNext(Handler $handler): Handler;
    function handle(string $request): ?string;
}

abstract class AbstractHandler implements Handler {
    private Handler $nextHandler;

    public function setNext(Handler $handler): Handler {
        $this->nextHandler = $handler;
        return $handler;
    }

    public function handle(string $request): ?string {
        if ($this->nextHandler) {
            return $this->nextHandler->handle($request);
        }

        return null;
    }


}

class AccountPaymentHandler extends AbstractHandler {

    private int $balance = 500;

    public function handle($request): ?string {
        if ($this->balance >= $request) {
            $this->balance -= $request;
            return "Оплата здійснюється з основного рахунку. Сума: $request грн.\n";
        } else {
            return parent::handle($request);
        }
    }
}

class CreditPaymentHandler extends AbstractHandler {
    private int $balance = 1000;

    function handle($request): ?string {
        if ($this->balance >= $request) {
            $this->balance -= $request;
            return "Оплата здійснюється з кредитної картки. Сума: $request грн.\n";
        }
        else {
            return parent::handle($request);
        }
    }
}

class ErrorPaymentHandler extends AbstractHandler {
    public function handle(string $request): ?string {
        return "Оплату відхилено: недостатньо коштів на рахунку та кредитній картці.\n";
    }

}

$accountHandler = new AccountPaymentHandler();
$creditHandler = new CreditPaymentHandler();
$errorPaymentHandler = new ErrorPaymentHandler();

$accountHandler->setNext($creditHandler)->setNext($errorPaymentHandler);

echo $accountHandler->handle(500);
echo $accountHandler->handle(1000);
echo $accountHandler->handle(1100);