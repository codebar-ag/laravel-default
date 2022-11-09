<?php

use CodebarAg\LaravelDefault\Facades\HelperPhone;

it('helper phone: format', function () {
    $number = '+41791234567';
    $coutry = 'CHE';
    $formatted = HelperPhone::format($coutry, $number);
    expect($formatted)->toBe('+41 (0) 79 123 45 67');
})->group('phone');
