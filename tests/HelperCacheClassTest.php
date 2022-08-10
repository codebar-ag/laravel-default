<?php

use CodebarAg\LaravelDefault\Facades\HelperCache;

it('helper cache: in seconds', function () {
    $seconds = HelperCache::inSeconds();
    expect($seconds)
        ->toBeInt();
})->group('cache');

it('helper cache: flush Tags', function () {
    $tags = ['tags'];
    $status = HelperCache::flushTags($tags);
    expect($status)
        ->toBeTrue();
})->group('cache');

it('helper cache: cache remember with tags', function () {
    $tags = ['tags'];
    $key = 'cache-remember-with-tags';
    $time = HelperCache::inSeconds();
    $store = 'You\'re awesome!';

    $response = HelperCache::cacheRememberWithTags($tags, $key, $time, $store);
    expect($response)
        ->toBeString()->toEqual($store);
})->group('cache');

it('helper cache: cache forever with tags', function () {
    $tags = ['tags'];
    $key = 'cache-remember-with-tags';
    $store = 'You\'re awesome!';

    $response = HelperCache::cacheForeverWithTags($tags, $key, $store);
    expect($response)
        ->toBeString()->toEqual($store);
})->group('cache');

