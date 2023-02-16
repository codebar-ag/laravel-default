<?php

namespace App\Checks;

use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Result;

class FailedJobs extends Check
{
    public function run(): Result
    {
        $count = DB::table('failed_jobs')->count();

        $result = Result::make();
        $result->shortSummary("failed jobs table count: {$count}");

        if ($count == 0) {
            return $result->ok();
        }

        return $result->failed();
    }
}
