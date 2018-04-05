<?php

declare(strict_types = 1);

namespace Interfaces;

/**
 * Interface for operate with custom languages.
 */
interface InterfaceLanguage
{
  public function convert(): string;
}
