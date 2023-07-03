<?php

use Illuminate\Support\Facades\Config;

it('components: fathom renders', function () {

    Config::set('laravel-default.services.fathom.environments', ['testing']);

    $siteId = 'XYZ';

    $script = '<script src="https://cdn-eu.usefathom.com/script.js" data-site="'.$siteId.'" defer></script>';

    $view = $this->blade(
        '<x-default::fathom/>',
    );

    expect($view->__toString())->not()->toContain($script);

    Config::set('laravel-default.services.fathom.site_id', $siteId);

    $view = $this->blade(
        '<x-default::fathom/>',
    );

    expect($view->__toString())->toContain($script);
})->group('components');
