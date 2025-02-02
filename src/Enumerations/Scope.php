<?php

namespace Assegai\Attributes\Enumerations;

/**
 * Enumerates the different types of scopes that Assegai supports.
 *
 * @package Assegai\Attributes\Enumerations
 */
enum Scope
{
  case DEFAULT;
  case TRANSIENT;
  case REQUEST;
}
