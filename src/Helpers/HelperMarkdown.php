<?php

namespace CodebarAg\LaravelDefault\Helpers;

use Illuminate\Support\Str;

class HelperMarkdown
{
    public function formatMarkdown(string $markdown): string
    {
        return Str::of($markdown)->markdown();
    }
}
