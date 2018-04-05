<?php

declare(strict_types = 1);

namespace Badian\Translit\Src;

/**
 * Interface for operate with custom languages.
 */
interface InterfaceLanguage
{
  public function convert(): string;
}
