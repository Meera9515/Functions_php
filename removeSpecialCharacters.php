//----------إزالة الرموز من النصوص-------------
<?php


function removeSpecialCharacters($strParam) {
    // write your code here
  $cleanedSentence = preg_replace('/[^A-Za-z0-9-_ ]+/', '', $strParam);
    
    return $cleanedSentence;

}

/***
(Inputs):
strParam = 'Hi How are you!'
 (Outputs):
'Hi How are you'
**/
?>
