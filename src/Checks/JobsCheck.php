<?php

namespace CodebarAg\LaravelDefault\Checks;

use Illuminate\Support\Facades\DB;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Result;

class JobsCheck extends Check
{
    public function run(): Result
    {
        $count = DB::table('jobs')->count();

        $result = Result::make();
        $result->shortSummary("jobs table count: {$count}");

        if ($count > 0) {
            return $result->failed();
        }

        return $result->ok();
    }
}
