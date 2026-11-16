<?php

namespace Assegai\Attributes;

use Attribute;
use Throwable;

/**
 * An attribute that marks a class or method as an exception handler and provides metadata that determines how the
 * exception should be handled.
 *
 * @package Assegai\Attributes
 */
#[Attribute(Attribute::TARGET_CLASS|Attribute::TARGET_METHOD)]
readonly class OnException
{
  /**
   * @param class-string<Throwable>|Throwable|array<int, class-string<Throwable>|Throwable> $filterClassNames The class names
   * of the exceptions that this handler should handle. If an array is provided, the handler will handle any of the
   * exceptions in the array. If a single class name is provided, the handler will only handle that exception.
   */
  public function __construct(public string|array|Throwable $filterClassNames)
  {
  }
}