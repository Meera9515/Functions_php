//===أحرف العلة====
<?php


function first_n_vowels($phrase, $n) {
    // write your code here

 $vowels = 'aeiouAEIOU';

    // حساب عدد حروف العلة في النص
    $vowelCount = 0;
    for ($i = 0; $i < strlen($phrase); $i++) {
        if (strpos($vowels, $phrase[$i]) !== false) {
            $vowelCount++;
        }
    }

    // التحقق من أن العدد المدخل أقل من أو يساوي عدد حروف العلة
    if ($n <= $vowelCount) {
        $result = '';
        $count = 0;

        // استخراج الحروف العلة المطلوبة
        for ($i = 0; $i < strlen($phrase) && $count < $n; $i++) {
            if (strpos($vowels, $phrase[$i]) !== false) {
                $result .= $phrase[$i];
                $count++;
            }
        }

        return $result;
    } else {
        return 'invalid';
    }
}


?>
