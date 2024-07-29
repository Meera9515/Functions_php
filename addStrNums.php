//====جمع عددين داخل قيمة نصية====
<?php


function addStrNums($num1, $num2) {
    // write your code here
 if (is_numeric($num1) && is_numeric($num2)) {
        $sum = intval($num1) + intval($num2);
        return $sum;
    }
    return '-1';
}


?>
