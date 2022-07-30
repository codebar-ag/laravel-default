<?php

use CodebarAg\LaravelDefault\Facades\HelperCache;

it('helper cache: in seconds', function () {
    $seconds = HelperCache::inSeconds();
    expect($seconds)
        ->toBeInt();
})->group('cache');
