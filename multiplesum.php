<!-- The function computeMultipleSum($n) should return the sum of all the positive

multiples of 3 or 5 or 7 strictly below $n

As an example, for $n=11, we get 3,5,6,7,9,10 as multiples and the sum of these

multiples is 40.

Implement computeMultiplesSum($n)

Constraints:
0 <= $n < 1000 -->

function computeMultiplesSum($n) {
  $sum = 0;
  for ($i = 1; $i < $n; $i++) {
    if ($i % 3 == 0 || $i % 5 == 0 || $i % 7 == 0) {
      $sum += $i;
    }
  }
  return $sum;
}
