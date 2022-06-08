<?php
declare(strict_types=1);

namespace FizzBuzz;

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
  public function testInputAndOutPut()
  {
    $fb = new FizzBuzz(5);
    self::assertInstanceOf(FizzBuzz::class, $fb);
    self::assertIsArray($fb->call());
    self::assertCount(5, $fb->call());
    self::assertEquals([1, 2, 'Fizz', 4, 'Buzz'], $fb->call());
  }

}
