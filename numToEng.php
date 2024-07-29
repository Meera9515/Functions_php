//====تحويل الأرقام إلى نصوص========
<?php


function numToEng($n) {
    // write your code here
  $ones = array(
        0 => "zero",
        1 => "one",
        2 => "two",
        3 => "three",
        4 => "four",
        5 => "five",
        6 => "six",
        7 => "seven",
        8 => "eight",
        9 => "nine",
    );

    $teens = array(
        10 => "ten",
        11 => "eleven",
        12 => "twelve",
        13 => "thirteen",
        14 => "fourteen",
        15 => "fifteen",
        16 => "sixteen",
        17 => "seventeen",
        18 => "eighteen",
        19 => "nineteen",
    );

    $tens = array(
        2 => "twenty",
        3 => "thirty",
        4 => "forty",
        5 => "fifty",
        6 => "sixty",
        7 => "seventy",
        8 => "eighty",
        9 => "ninety",
    );

    if ($n >= 0 && $n <= 9) {
        return $ones[$n];
    } elseif ($n >= 10 && $n <= 19) {
        return $teens[$n];
    } elseif ($n >= 20 && $n <= 99) {
        $tens_digit = (int) ($n / 10);
        $ones_digit = $n % 10;
        $result = $tens[$tens_digit];
        if ($ones_digit > 0) {
            $result .= '-' . $ones[$ones_digit];
        }
        return $result;
    } elseif ($n >= 100 && $n <= 999) {
        $hundreds_digit = (int) ($n / 100);
        $remaining_digits = $n % 100;
        $result = $ones[$hundreds_digit] . ' hundred ';
        if ($remaining_digits > 0) {
            $result .=  numToEng($remaining_digits);
        }
        return $result;
    }
}



?>
