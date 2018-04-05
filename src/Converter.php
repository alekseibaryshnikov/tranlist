<?php

declare(strict_types=1);

namespace Translit;

use Translit\Languages\LanguageRu;

/**
 * Fabric for present API to client.
 */
class Converter
{
    /**
     * Translit from russian to latin.
     * @param string $inputString
     * @return string
     */
    public static function translitRu($inputString): string
    {
        $LanguageRu = new LanguageRu($inputString);
        return $LanguageRu->convert();
    }

}
