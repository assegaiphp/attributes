<?php

use Assegai\Attributes\Component;
use Assegai\Attributes\Controller;
use Assegai\Attributes\Enumerations\Scope;
use Assegai\Attributes\Injectable;
use Assegai\Attributes\OnException;
use Assegai\Attributes\ParamAttribute;
use Assegai\Attributes\ScopeOptions;

it('captures component metadata', function () {
  $component = new Component(
    selector: 'app-hero-card',
    providers: ['heroService'],
    templateUrl: './HeroCardComponent.twig',
    styleUrls: ['./HeroCardComponent.css'],
  );

  expect($component->selector)->toBe('app-hero-card')
    ->and($component->providers)->toBe(['heroService'])
    ->and($component->templateUrl)->toBe('./HeroCardComponent.twig')
    ->and($component->styleUrls)->toBe(['./HeroCardComponent.css']);
});

it('captures controller host metadata', function () {
  $controller = new Controller(path: 'heroes', host: ['api.example.com']);

  expect($controller->path)->toBe('heroes')
    ->and($controller->host)->toBe(['api.example.com']);
});

it('captures injectable scope options', function () {
  $options = new ScopeOptions(scope: Scope::REQUEST, durable: false);
  $injectable = new Injectable($options);

  expect($injectable->options)->toBe($options);
});

it('captures exception handler filters', function () {
  $handler = new OnException([RuntimeException::class, LogicException::class]);

  expect($handler->filterClassNames)->toBe([RuntimeException::class, LogicException::class]);
});

it('initializes parameter attribute values', function () {
  $attribute = new class('id') extends ParamAttribute {
  };

  expect($attribute->value)->toBe('id');
});
