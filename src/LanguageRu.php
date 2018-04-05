<?php

declare(strict_types=1);

namespace Badian\Translit\Src;

class LanguageRu implements InterfaceLanguage
{
    // Array with letters for current language as key and latin equivalent as value.
    private $currentLangLetters;

    private $inputString;

    public function __construct($inputString)
    {
        parent::__construct();
        $this->inputString = strip_tags(trim($inputString));
        $this->currentLangLetters = [
            "а" => "a",
            "б" => "b",
            "в" => "v",
            "г" => "g",
            "д" => "d",
            "е" => "e",
            "ё" => "yo",
            "ж" => "zh",
            "з" => "z",
            "и" => "i",
            "й" => "y",
            "к" => "k",
            "л" => "l",
            "м" => "m",
            "н" => "n",
            "о" => "o",
            "п" => "p",
            "р" => "r",
            "с" => "s",
            "т" => "t",
            "у" => "u",
            "ф" => "f",
            "х" => "h",
            "ц" => "ts",
            "ч" => "ch",
            "ш" => "sh",
            "щ" => "sh",
            "ъ" => "",
            "ы" => "y",
            "ь" => "",
            "э" => "e",
            "ю" => "yu",
            "я" => "ya",
            " " => "-"
        ];
    }

    /**
     * Convert requested string to array and walk through it.
     * Compare letters from requested string with current language letters
     * and take equivalent on latin for this letter.
     *
     * @return string
     */
    public function convert(): string
    {
        $output = [];

        array_walk(str_split($this->inputString), function (&$value) use (&$output) {
            if (array_key_exists($this->currentLangLetters, $value)) {
                $output[] = $this->currentLangLetters[$value];
            } elseif (ctype_digit($value)) {
                $output = $value;
            } else {
                $output[] = "-";
            }
        });

        return implode("", $output);
    }

}
