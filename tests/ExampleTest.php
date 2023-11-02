<?php

declare(strict_types=1);

namespace Codebarn\Test\HelloWorld;

use Codebarn\HelloWorld\HelloWorld;

class HelloWorldTest extends TestCase
{
    public function testGreet(): void
    {
        $example = $this->mockery(HelloWorld::class);
        $example->shouldReceive('greet')->passthru();

        $this->assertSame('Hello, Friends!', $example->greet('Friends'));
    }
}
