<?php
function Simple($n) {
    for($x=2; $x<$n; $x++) {
        if($n %$x ==0) {
            return 0;
        }
    }
    return 1;
}
$a = Simple(6);
if ($a==0)
    echo 'Не простое число'."\n";
else
    echo 'Простое число'."\n";
?>