<?php

namespace CodebarAg\LaravelDefault;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class Icon
{
    public function list()
    {
        $heroicons = $this->heroicons();
        $fontawesome = $this->fontawesome();

        return $heroicons->merge($fontawesome);
    }

    public function heroicons(): Collection
    {
        $collectionName = 'heroicons';
        $files = $this->readDirectory($collectionName);
        $icons = $this->filterIcons($files);

        return $this->mapCollections($icons, $collectionName);
    }

    public function fontawesome(): Collection
    {
        $collectionName = 'fontawesome';
        $files = $this->readDirectory($collectionName);
        $icons = $this->filterIcons($files);

        return $this->mapCollections($icons, $collectionName);
    }

    protected function mapCollections(Collection $icons, string $collection)
    {
        return $icons->map(function ($icon) use ($collection) {
            return [
                'name' => $icon,
                'collection' => $collection,
            ];
        });
    }

    protected function filterIcons(Collection $files)
    {
        return $files->map(function ($file) {
            return Str::afterLast(Str::before($file, '.blade.php'), '.');
        })->filter()->unique();
    }

    protected function readDirectory($directoryName): Collection
    {
        $path = $this->basePath().DIRECTORY_SEPARATOR.$directoryName;
        $directoryCheck = $this->directoryExists($path);

        if (! $directoryCheck) {
            return collect();
        }

        $files = scandir($path);

        return collect($files);
    }

    protected function directoryExists($path): bool
    {
        return is_dir($path);
    }

    protected function basePath(): string
    {
        return Str::beforeLast(__DIR__, '/src')
            .DIRECTORY_SEPARATOR.'resources'
            .DIRECTORY_SEPARATOR.'views'
            .DIRECTORY_SEPARATOR.'components'
            .DIRECTORY_SEPARATOR.'icons';
    }
}
