<?php

namespace CodebarAg\LaravelDefault\Helpers;

class HelperFile
{
    public function formatBytes(int $size, int $precision = 1): string
    {
        $base = log($size, 1024);
        $suffixes = ['B', 'KB', 'MB', 'GB', 'TB'];

        return round(pow(1024, $base - floor($base)), $precision) . ' ' . $suffixes[floor($base)];
    }

    public function nameWithDate(string $name): string
    {
        return now()->format('Ymd_') . $name;
    }

    public function nameWithDateTime(string $name): string
    {
        return now()->format('YmdHm_') . $name;
    }

}
