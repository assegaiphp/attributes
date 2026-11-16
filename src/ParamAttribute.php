<?php

namespace Assegai\Attributes;

/**
 * Base class for all parameter attributes.
 *
 * @package Assegai\Attributes
 */
abstract class ParamAttribute
{
  public readonly mixed $value;

  public function __construct(mixed $value = null)
  {
    $this->value = $value;
  }
}
