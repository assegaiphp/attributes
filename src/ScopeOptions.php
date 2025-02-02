<?php

namespace Assegai\Attributes;

use Assegai\Attributes\Enumerations\Scope;

/**
 * Scope options for the Injectable attribute.
 */
final readonly class ScopeOptions
{
  /**
   * ScopeOptions constructor.
   *
   * @param Scope $scope The scope of the Injectable.
   * @param bool $durable Whether the Injectable is durable or not.
   */
  public function __construct(
    public Scope $scope = Scope::DEFAULT,
    public bool  $durable = true
  )
  {
  }
}