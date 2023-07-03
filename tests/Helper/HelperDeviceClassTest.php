<?php

use CodebarAg\LaravelDefault\Facades\HelperDevice;

it('helper device: is mobile device', function () {
    $isMobileDevice = HelperDevice::isMobileDevice();
    expect($isMobileDevice)
        ->toBeBool();
})->group('device');
