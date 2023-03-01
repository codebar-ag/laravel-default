<?php

use CodebarAg\LaravelDefault\Facades\HelperIcon;

it('helper icon: list icons', function () {
    $icons = HelperIcon::list();

    expect($icons)
        ->toBeCollection()
        ->not()->toBeEmpty();

    $icon = $icons->first();

    expect($icon)
        ->toBeArray()
        ->toHaveKeys(['name', 'collection']);
})->group('icons');

it('helper icon: list heroicons', function () {
    $icons = HelperIcon::heroicons();
    expect($icons)
        ->toBeCollection()
        ->not()->toBeEmpty();

    $icon = $icons->first();

    expect($icon)
        ->toBeArray()
        ->toHaveKeys(['name', 'collection']);

    $icon = $icons->first();

    expect($icon['name'])
        ->toBeString()
        ->and($icon['collection'])
        ->toBeString()
        ->toEqual('heroicons');
})->group('icons');

it('helper icon: list fontawesome', function () {
    $icons = HelperIcon::fontawesome();
    expect($icons)
        ->toBeCollection()
        // ->not()->toBeEmpty();
        ->toBeEmpty();
})->group('icons')->skip();
