<?php

use CodebarAg\LaravelDefault\Facades\Icon;

it('icon:', function () {
    $hey = Icon::heroicons();
    expect(true)->toBe(false);
})->group('icons');
