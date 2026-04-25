<div align="center" style="padding-bottom: 48px">
    <a href="https://assegaiphp.com/" target="blank"><img src="https://assegaiphp.com/images/logos/logo-cropped.png" width="200" alt="Assegai Logo"></a>
</div>

<p style="text-align: center">Core PHP attributes for AssegaiPHP applications.</p>

## Description

`assegaiphp/attributes` defines the framework-level metadata attributes shared across AssegaiPHP packages. It is intentionally small and dependency-light: the package only requires PHP 8.4 or newer.

This package is part of the AssegaiPHP 0.9 release line and is consumed by packages such as `assegaiphp/core`, `assegaiphp/common`, and `assegaiphp/auth` through the `^1.0` attributes line.

## Installation

Install the package with Composer:

```bash
composer require assegaiphp/attributes:^1.0
```

## Available Attributes

### `Injectable`

Use `Injectable` to mark a class as available to the dependency injector.

```php
<?php

use Assegai\Attributes\Enumerations\Scope;
use Assegai\Attributes\Injectable;
use Assegai\Attributes\ScopeOptions;

#[Injectable(new ScopeOptions(scope: Scope::DEFAULT, durable: true))]
class HeroService
{
}
```

### `Controller`

Use `Controller` to mark a class as an HTTP controller. The optional `host` argument accepts a single host or a list of hosts.

```php
<?php

use Assegai\Attributes\Controller;

#[Controller(path: 'heroes')]
class HeroesController
{
}
```

### `Component`

Use `Component` to describe a server-rendered component, including its selector, template, styles, and providers.

```php
<?php

use Assegai\Attributes\Component;

#[Component(
  selector: 'app-hero-card',
  templateUrl: './HeroCardComponent.twig',
  styleUrls: ['./HeroCardComponent.css'],
)]
class HeroCardComponent
{
}
```

### `OnException`

Use `OnException` to mark a class or method as an exception handler for one or more exception types.

```php
<?php

use Assegai\Attributes\OnException;
use RuntimeException;

#[OnException(RuntimeException::class)]
class RuntimeExceptionHandler
{
}
```

### `ParamAttribute`

`ParamAttribute` is the base class for parameter-oriented attributes. It stores the attribute value supplied by concrete parameter attributes.

```php
<?php

use Assegai\Attributes\ParamAttribute;
use Attribute;

#[Attribute(Attribute::TARGET_PARAMETER)]
final class Param extends ParamAttribute
{
}
```

## More Information

For the full framework guide, visit [assegaiphp.com/guide](https://assegaiphp.com/guide).
