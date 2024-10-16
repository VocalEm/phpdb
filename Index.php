<?php

use App\Controllers\Incomes;
use App\Enums\IncomeTypeEnum;
use App\Enums\PayMethodEnum;

require "vendor/autoload.php";



$incomes_controller = new Incomes();
$incomes_controller->store(
    [
        "payment_method" => PayMethodEnum::BankAccount->value,
        "type" => IncomeTypeEnum::Salary->value,
        "date" => date("Y-m-d- H:i:s"),
        "amount" => 1000,
        "description" => "pago por trabajo"
    ]


);
