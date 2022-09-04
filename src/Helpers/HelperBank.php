<?php

namespace CodebarAg\LaravelDefault\Helpers;

class HelperBank
{
    public function formatIban(string|null $iban): string|null
    {
        return $iban ?
            trim(chunk_split($iban, 4, ' '))
            : null;
    }
}
