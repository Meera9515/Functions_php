//====فصل الكلمات========
<?php


function cap_space($txt) {
    // write your code here
  $result = '';

    $textLength = strlen($txt);
    for ($i = 0; $i < $textLength; $i++) {
        $char = $txt[$i];

        if (ctype_upper($char)) {
          
                      $result .= ' ' . strtolower($char);
        } else {
            $result .= $char;
        }
    }

    return $result;
}


?>
