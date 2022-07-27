<?php

namespace CodebarAG\LaravelDefault\Commands;

use Illuminate\Console\Command;

class LaravelDefaultCommand extends Command
{
    public $signature = 'default:hello';

    public $description = 'Say hello';

    public function handle(): int
    {
        $this->comment('Hello world!');

        return self::SUCCESS;
    }
}
