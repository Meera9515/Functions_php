//-----------العثور على العنصر الفريد في المصفوفة----------------------
<?php


function unique($arr) {
    // write your code here

    $u = array();
    $elementCounts = array_count_values($arr);

    foreach ($elementCounts as $element => $count) {
        if ($count === 1) {
            $u[] = $element;
        }
    }

    return $u;
}
/**
 (Inputs)
arr = [1,1,1,2,1,1]
المخرجات (Outputs)
[2]**/


?>
