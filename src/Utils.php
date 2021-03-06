<?php

namespace Translit;

trait Utils
{
    /**
     * Convert string into array with UTF-8 encoding.
     * @param string $str
     * @param int $len
     * @return array
     */
    function utf8Split(string $str, $len = 1): array
    {
        $arr = array();
        $strLen = mb_strlen($str, 'UTF-8');
        for ($i = 0; $i < $strLen; $i++) {
            $arr[] = mb_substr($str, $i, $len, 'UTF-8');
        }
        return $arr;
    }
}