<?php

use CodebarAg\LaravelDefault\Facades\Number;

it('number: format', function () {
    $number = 1234.56;
    $formatted = Number::format($number);
    expect($formatted)->toBe("1'234.56");
})->group('number');
