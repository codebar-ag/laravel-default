<?php

use CodebarAg\LaravelDefault\Facades\HelperNumber;

it('helper number: format', function () {
    $number = 1234.56;
    $formatted = HelperNumber::format($number);
    expect($formatted)->toBe("1'234.56");

    $number = null;
    $formatted = HelperNumber::format($number);
    expect($formatted)->toBe('0.00');
})->group('number');
