<?php

namespace Tests\Kata;

use Kata\Example;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * @test
     */
    public function it_says_hello()
    {
        $example = new Example();
        Assert::assertEquals('hello', $example->hello());
    }
}
