///-----------عداد للرقم 1------------
<?php


function count_ones($num) {
    // write your code here
       $b = decbin($num);
    
    $count = substr_count($b, '1');
    
    return $count;
}
/**
 (Inputs):
num = 100
 (Outputs):
3
**/

?>
