<?php
function ispalindrome($string) {
    if ($string == strrev($string))
        return "Да";
    else
        return "Нет";
}
echo ispalindrome('madam')
?>