<?php

namespace CodebarAg\LaravelDefault\Helpers;

class HelperBank
{
    public function formatIban(string $iban): string
    {
        return trim(chunk_split($iban, 4, ' '));
    }
}
