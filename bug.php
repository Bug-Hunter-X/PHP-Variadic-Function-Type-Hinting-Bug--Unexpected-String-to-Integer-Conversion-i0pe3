function foo(int ...$args): int {
  return array_sum($args);
}

$result = foo(1, 2, '3'); //Unexpected behavior

var_dump($result); //Output: int(6) instead of throwing an error