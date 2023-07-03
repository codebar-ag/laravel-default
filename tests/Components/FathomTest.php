<?php

it('components: fathom renders', function () {
    $view = $this->blade(
        '<x-default::fathom/>',
    );

    expect($view->__toString())->toContain(
        '<script src="https://cdn-eu.usefathom.com/script.js" data-site="" defer></script>'
    );
})->group('components');
