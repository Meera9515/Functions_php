//===إضافة الارقام على المصفوفات====
<?php


function add_five($arr) {
    // write your code here

    $result = array();
    
    foreach ($arr as $element) {
        $result[] = $element . '5';
    }
    
    return $result;

}


?>
