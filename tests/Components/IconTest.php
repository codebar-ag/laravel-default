<?php

use Illuminate\Support\Arr;
use CodebarAg\LaravelDefault\Facades\Icon;

it('components: list icons', function () {

    $icons = Icon::list();

    $icons->each(function ($icon) {
        $name = Arr::get($icon, 'name');
        $view = $this->blade(
            '<x-default::icon icon="' . $name . '" />'
        );
        expect($view->__toString())->toBeString();
    });

})->group('components');

