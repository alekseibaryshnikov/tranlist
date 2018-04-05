<?php

declare(strict_types=1);

namespace Classes;

use Classes\Languages\LanguageRu;

class Converter
{
    public static function translitRu($inputString): string
    {
        $LanguageRu = new LanguageRu($inputString);
        return $LanguageRu->convert();
    }

}
