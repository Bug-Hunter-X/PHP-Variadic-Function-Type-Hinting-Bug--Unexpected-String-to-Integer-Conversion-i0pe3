function foo(int ...$args): int {
  foreach ($args as $arg) {
    if (!is_int($arg)) {
      throw new InvalidArgumentException('Argument must be an integer.');
    }
  }
  return array_sum($args);
}

$result = foo(1, 2, '3'); // Throws InvalidArgumentException

var_dump($result); 