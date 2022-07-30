<?php

use CodebarAg\LaravelDefault\Facades\Icon;
use Illuminate\Support\Arr;

it('components: icon heroicons ', function () {
    $icons = Icon::list();

    $icons->each(function ($icon) {
        $name = Arr::get($icon, 'name');
        $view = $this->blade(
            '<x-default::icon-heroicons icon="'.$name.'" />'
        );
        expect($view->__toString())->toBeString();
    });
})->group('components');
