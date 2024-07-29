//===============اطول تكرار==============
<?php


function repetitions($s) {
    // write your code here
   $length = strlen($s);
    $maxCount = 1;
    $currentCount = 1;

    for ($i = 1; $i < $length; $i++) {
        if ($s[$i] === $s[$i - 1]) {
            $currentCount++;
        } else {
            if ($currentCount > $maxCount) {
                $maxCount = $currentCount;
            }
            $currentCount = 1;
        }
    }

    if ($currentCount > $maxCount) {
        $maxCount = $currentCount;
    }

    return $maxCount;
}


?>
