<?php

use CodebarAg\LaravelDefault\Facades\Icon;


it('icon: list icons', function () {
    $icons = Icon::list();

    expect($icons)
        ->toBeCollection()
        ->not()->toBeEmpty();

    $icon = $icons->first();

    expect($icon)
        ->toBeArray()
        ->toHaveKeys(['name', 'collection']);

})->group('icons');

it('icon: list heroicons', function () {
    $icons = Icon::heroicons();
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

it('icon: list fontawesome', function () {
    $icons = Icon::fontawesome();
    expect($icons)
        ->toBeCollection()
        ->not()->toBeEmpty();

    $icon = $icons->first();

    expect($icon['name'])
        ->toBeString()
        ->and($icon['collection'])
        ->toBeString()
        ->toEqual('fontawesome');

})->group('icons');
