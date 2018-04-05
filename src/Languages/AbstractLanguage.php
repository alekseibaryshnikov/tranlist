<?php


namespace Translit\Languages;


class AbstractLanguage
{
    protected $latinDefault;

    public function __construct()
    {
        $this->latinDefault = [
            "a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"
        ];
    }
}