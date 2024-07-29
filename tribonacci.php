//====سلسلة Tribonacci====
<?php


function tribonacci($num) {
    // write your code here
  $sequence = [1, 1, 1];

  if ($num <= 3) {
    return array_slice($sequence, 0, $num);
  }

  for ($i = 3; $i < $num; $i++) {
    $nextNumber = $sequence[$i - 1] + $sequence[$i - 2] + $sequence[$i - 3];
    $sequence[] = $nextNumber;
  }

  return $sequence;
}


?>
