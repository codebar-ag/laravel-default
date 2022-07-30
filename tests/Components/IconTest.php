<?php

use CodebarAg\LaravelDefault\Facades\HelperIcon;
use Illuminate\Support\Arr;

it('components: icon heroicons ', function () {
    $icons = HelperIcon::list();

    $icons->each(function ($icon) {
        $name = Arr::get($icon, 'name');
        $view = $this->blade(
            '<x-default::icon-heroicons icon="'.$name.'" />'
        );
        expect($view->__toString())->toBeString();
    });
})->group('components');
