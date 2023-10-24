//------------التحقق من وجود مسافة في الجملة--------------
<?php


function hasSpace($strParam) {
    // write your code here

    $result = '';
    $space = false;

    for ($i = 0; $i < strlen($strParam); $i++) {
        if ($strParam[$i] == ' ') {
            $result .= '#';
            $space = true;
        } else {
            $result .= $strParam[$i];
        }
    }

    if ($space) {
        return $result;
    } else {
        return $strParam;
    }
}
/**
(Inputs):
strParam = 'Riyadh'
 (Outputs):
'Riyadh'

**/





?>
