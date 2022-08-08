<?php

use CodebarAg\LaravelDefault\Facades\HelperFile;

it('helper file: format bytes', function () {
    $byte = 1;
    $formatted = HelperFile::formatBytes($byte);
    expect($formatted)
        ->toBeString()
        ->toEqual('1 B');

    $kiloByte = 1024;
    $formatted = HelperFile::formatBytes($kiloByte);
    expect($formatted)
        ->toBeString()
        ->toEqual('1 KB');

    $megaByte = 1048576;
    $formatted = HelperFile::formatBytes($megaByte);
    expect($formatted)
        ->toBeString()
        ->toEqual('1 MB');

    $gigaByte = 1073741824;
    $formatted = HelperFile::formatBytes($gigaByte);
    expect($formatted)
        ->toBeString()
        ->toEqual('1 GB');

    $teraByte = 1099511627776;
    $formatted = HelperFile::formatBytes($teraByte);
    expect($formatted)
        ->toBeString()
        ->toEqual('1 TB');
})->group('file');
