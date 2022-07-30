<?php

use CodebarAg\LaravelDefault\Facades\Date;

it('date: format date-time', function () {
    $date = now();

    $formatted = Date::formatDateTime($date, 'de');
    expect($formatted)->toBe($date->format('d.m.Y H:i') . ' Uhr');

    $formatted = Date::formatDateTime($date, 'en');
    expect($formatted)->toBe($date->format('d.m.Y g:i a'));

    $formatted = Date::formatDateTime($date, 'default');
    expect($formatted)->toBe($date->format('d.m.Y H:i'));
});

it('date: format date', function () {
    $date = now();
    $formatted = Date::formatDate($date);
    expect($formatted)->toBe($date->format('d.m.Y'));
});
