<div align="center" style="padding-bottom: 48px">
    <a href="https://assegaiphp.com/" target="blank"><img src="https://assegaiphp.com/images/logos/logo-cropped.png" width="200" alt="Assegai Logo"></a>
</div>

<p style="text-align: center">A progressive <a href="https://php.net">PHP</a> framework for building effecient and scalable server-side applications.</p>

## Description

The attributes library is a collection of common PHP 8 attributes that can be used in your Assegai application.

## Installation

You can install the package via composer:

```bash
$ composer require assegaiphp/attributes
```

* To check out the [guide](https://assegaiphp.com/guide), visit [assegaiphp.com](https://assegaiphp.com). 📚

## Usage

Use the `Injectable` attribute to mark a class as injectable.

```php
<?php

use Assegai\Attributes\Injectable;

#[Injectable]
class MyService {
  public function __construct() {
    // Do something
  }
}
```

Then you can use your service in your application like this:

```php
<?php

use Assegai\Attributes\Controller;
use Assegai\Core\Attributes\Http\Get;
use Assegai\Core\Attributes\Param;

#[Controller('my-controller')]
class MyController
{
    public function __construct(protected MyService $myService) {
    }
    
    #[Get]
    public function findAll(): array {
       return $this->myService->findAll();
    }
    
    #[Get(':id')]
    public function findById(#[Param('id')] int $id) {
      return $this->myService->findById($id);
    }
}
```