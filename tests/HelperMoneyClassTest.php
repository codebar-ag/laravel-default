<?php

use CodebarAg\LaravelDefault\Facades\HelperMoney;

it('helper money: format', function () {
    $number = 1234.56;
    $formatted = HelperMoney::format($number);
    expect($formatted)->toBe("1'234.56 CHF");

    $number = null;
    $formatted = HelperMoney::format($number);
    expect($formatted)->toBe('0.00 CHF');
})->group('money');

it('helper money: roundMoney', function () {
    $money = 12.13;
    $rounded = HelperMoney::roundMoney($money);
    expect($rounded)->toBe(12.15);
})->group('money');

it('helper money: roundMoneyUp', function () {
    $money = 12.12;
    $rounded = HelperMoney::roundMoneyUp($money);
    expect($rounded)->toBe(12.15);
})->group('money');

it('helper money: roundMoneyDown', function () {
    $money = 12.13;
    $rounded = HelperMoney::roundMoneyDown($money);
    expect($rounded)->toBe(12.10);
})->group('money');
