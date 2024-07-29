//==========المصفوفة التزايدية==========
<?php


function increasing_array($arr) {
    // write your code here
$a = 0;

  for ($i = 1; $i < count($arr); $i++) {
    if ($arr[$i] < $arr[$i - 1]) {
      $diff = $arr[$i - 1] - $arr[$i];
      $arr[$i] += $diff;
      $a += $diff;
    }
  }

  return $a;
}


?>
