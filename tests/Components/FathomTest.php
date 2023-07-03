<?php

use Illuminate\Support\Facades\Config;

it('components: fathom renders', function () {

    Config::set('laravel-default.services.fathom.environments', ['testing']);

    $view = $this->blade(
        '<x-default::fathom/>',
    );

    ray($view->__toString());
    expect($view->__toString())->toContain(
        '<script src="https://cdn-eu.usefathom.com/script.js" data-site="" defer></script>'
    );
})->group('components');
