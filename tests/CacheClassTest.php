<?php

use CodebarAg\LaravelDefault\Facades\Cache;

it('cache: in seconds', function () {
    $seconds = Cache::inSeconds();
    expect($seconds)
        ->toBeInt();
})->group('cache');
