//=======التحقق من العملية الرياضية=========
<?php


function math_expr($expr) {
    // write your code here
    $expr = preg_replace('/\s+/', '', $expr);

    if (empty($expr)) {
        return false;
    }

    $pattern = '/^[-]?(\d+(\.\d*)?|\.\d+)([+\-*\/]([-]?\d+(\.\d*)?|\.\d+))*$/';

    return preg_match($pattern, $expr) === 1; 
}


?>
