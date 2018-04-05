<?php

declare(strict_types=1);

namespace Badian\Translit;

use Badian\Translit\Src\LanguageRu;

class Translit
{
    private $inputString;
    
    public function __construct(string $inputString)
    {
        $this->inputString = $inputString;
    }

    public function translitRu(): string
    {
        $LanguageRu = new LanguageRu($this->inputString);
        return $LanguageRu->convert();
    }
}
