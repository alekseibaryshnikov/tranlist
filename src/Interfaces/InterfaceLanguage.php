<?php

declare(strict_types = 1);

namespace Translit\Interfaces;

/**
 * Interface for operating with custom languages.
 */
interface InterfaceLanguage
{
  public function convert(): string;
}
