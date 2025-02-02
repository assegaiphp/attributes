<?php

namespace Assegai\Attributes;

use Attribute;

/**
 * An attribute that marks a class as an AssegaiPHP controller and provides metadata that determines how the controller
 * should be processed, instantiated and used at runtime.
 *
 * @package Assegai\Attributes
 */
#[Attribute(Attribute::TARGET_CLASS)]
class Controller
{
  /**
   * @param string $path The path that the controller should be mounted at.
   * @param string|string[]|null $host The host(s) that the controller should be mounted on.
   */
  public function __construct(
    public string            $path = '',
    public null|string|array $host = null,
  )
  {
  }
}