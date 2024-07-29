//====العمليات اللاحقة (postfix)=======
<?php


function postFix($expr) {
    // write your code here
$stack = [];
    $tokens = explode(' ', $expr);

    foreach ($tokens as $token) {
        if (is_numeric($token)) {
            array_push($stack, $token);
        } else {
            $operand2 = array_pop($stack);
            $operand1 = array_pop($stack);

            switch ($token) {
                case '+':
                    array_push($stack, $operand1 + $operand2);
                    break;
                case '-':
                    array_push($stack, $operand1 - $operand2);
                    break;
                case '*':
                    array_push($stack, $operand1 * $operand2);
                    break;
                case '/':
                    if ($operand2 == 0) {
                        return "تقسيم على صفر غير ممكن";
                    }
                    array_push($stack, $operand1 / $operand2);
                    break;
            }
        }
    }

    return array_pop($stack);
}


?>
