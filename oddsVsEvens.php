//=====تحديد الأعداد الفردية و الزوجية=======
<?php


function oddsVsEvens($num) {
    // write your code here
$oddSum = 0;
    $evenSum = 0;
    $numStr = (string) abs($num);

    for ($i = 0; $i < strlen($numStr); $i++) {
        $digit = intval($numStr[$i]);

        if ($digit % 2 === 0) {
            $evenSum += $digit;
        } else {
            $oddSum += $digit;
        }
    }

    if ($oddSum > $evenSum) {
        return 'odd';
    } elseif ($evenSum > $oddSum) {
        return 'even';
    } else {
        return 'equal';
    }
}



?>
