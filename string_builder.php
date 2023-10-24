//----------------------- بناء النصوص --------------------------------------
<?php


function string_builder($expression) {
    // write your code here
   $stack = new SplStack();
    $currentNum = 0;
    $currentStr = '';

    for ($i = 0; $i < strlen($expression); $i++) {
        $char = $expression[$i];

        if (is_numeric($char)) {
            $currentNum = $currentNum * 10 + intval($char);
        } elseif ($char === '[') {
            $stack->push($currentStr);
            $stack->push($currentNum);
            $currentStr = '';
            $currentNum = 0;
        } elseif ($char === ']') {
            $num = $stack->pop();
            $prevStr = $stack->pop();
            $currentStr = $prevStr . str_repeat($currentStr, $num);
        } else {
            $currentStr .= $char;
        }
    }

    return $currentStr;
}


/**
 (Inputs):
expression = '3[a]2[bc]'
 (Outputs):
'aaabcbc'
**/

?>
