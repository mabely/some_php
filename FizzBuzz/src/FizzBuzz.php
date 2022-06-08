<?php
declare(strict_types=1);

namespace FizzBuzz;

class FizzBuzz
{
    function __construct(public int $number) {}

  public function call ()
  {
    $result = [];
    for($x = 1; $x <= $this->number; $x++) {
      $result[$x-1] = $this->checkNumber($x);
    }
    return $result;


  }

  private function checkNumber (int $number)
  {
    if ($number % 3 == 0 && $number % 5 == 0) {
      return 'FizzBuzz';
    } elseif ($number % 3 == 0) {
      return 'Fizz';
    } elseif ($number % 5 == 0) {
      return 'Buzz';
    } else {
      return $number;
    }
  }
}
