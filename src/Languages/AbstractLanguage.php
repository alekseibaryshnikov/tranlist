<?php declare (strict_types = 1);

namespace Translit\Languages;

use \Translit\Utils;

/**
 * Abstract class for translit from setted language to latin.
 * Input string compare with array `letter => latinLetter`
 * and if symbol from string is equivalent `letter` which is array key
 * that symbol change to `latinLetter`.
 * 
 * If input string contain latin symbols or numbers nothing is change.
 * 
 * Dotes, commas, semicolon and other symbols ignore. Special symbols
 * can be set in language letters array.
 */
class AbstractLanguage
{
    public function __construct()
    {
    }

    /**
     * Core method for iterating through input string and change equivalents.
     * @param string $inputString
     * @param array $currentLanguage
     * @return string
     */
    public function convert(string $inputString, array $currentLanguage) : string
    {
        $output = [];

        $latinDefault = [
            "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"
        ];

        $arrayString = $this->utf8Split(mb_strtolower($inputString));

        $output = array_map(function ($value) use ($output, $currentLanguage, $latinDefault) {
            if (key_exists($value, $currentLanguage)) {
                return $currentLanguage[$value];
            } elseif (in_array($value, $latinDefault)) {
                return $value;
            } else {
                return "";
            }
        }, $arrayString);

        return implode("", $output);
    }
}