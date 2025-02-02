<?php

namespace Assegai\Attributes;

use Assegai\Attributes\Enumerations\Scope;
use Assegai\Attributes\ScopeOptions as InjectableOptions;
use Attribute;

/**
 * An attribute that marks a class as available to be provided and injected as a dependency.
 *
 * @package Assegai\Attributes
 */
#[Attribute(Attribute::TARGET_CLASS)]
class Injectable
{
  /**
   * @param InjectableOptions|array{scope: Scope, durable: bool}|null $options
   */
  public function __construct(
    public InjectableOptions|array|null $options = null,
  )
  {
  }
}