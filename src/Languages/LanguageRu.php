<?php

declare(strict_types=1);

namespace Translit\Languages;

use Translit\Interfaces\InterfaceLanguage;

class LanguageRu extends AbstractLanguage implements InterfaceLanguage
{
    use \Translit\Utils;

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
            " " => "-",
            "1" => "1",
            "2" => "2",
            "3" => "3",
            "4" => "4",
            "5" => "5",
            "6" => "6",
            "7" => "7",
            "8" => "8",
            "9" => "9",
            "0" => "0",
            "!" => "!"
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
        $arrayString = $this->utf8Split(mb_strtolower($this->inputString));

        $output = array_map(function ($value) use ($output) {
            if (key_exists($value, $this->currentLangLetters)) {
                return $this->currentLangLetters[$value];
            } else {
                return "-";
            }
        }, $arrayString);

        return implode("", $output);
    }
}
