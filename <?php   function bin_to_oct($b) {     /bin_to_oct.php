//===تحويل رقم ثنائي إلى رقم ثماني======
<?php


function bin_to_oct($b) {
    // write your code here
$decimal = bindec($b);


$octal = decoct($decimal);
return $octal;
}


?>
