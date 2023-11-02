<?php declare(strict_types=1);

namespace Codebarn\HelloWorld;

class HelloWorld {

  public function greet(string $name = 'World'): string {
    return "Hello, $name!";
  }
}
