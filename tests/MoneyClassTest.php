<?php

use CodebarAg\LaravelDefault\Facades\Money;

it('money: format', function () {
    $number = 1234.56;
    $formatted = Money::format($number);
    expect($formatted)->toBe("1'234.56 CHF");
});


it('money: roundMoney', function () {
    $money = 12.13;
    $rounded = Money::roundMoney($money);
    expect($rounded)->toBe(12.15);
});

it('money: roundMoneyUp', function () {
    $money = 12.12;
    $rounded = Money::roundMoneyUp($money);
    expect($rounded)->toBe(12.15);
});

it('money: roundMoneyDown', function () {
    $money = 12.13;
    $rounded = Money::roundMoneyDown($money);
    expect($rounded)->toBe(12.10);
});
