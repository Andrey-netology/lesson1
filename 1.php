<?php
$status = true;
$x = 1;
$y = 1;
$userNumber = round(0.100);

echo "Число ".$userNumber;

while($status) {

    if ($x > $userNumber) {
        $status = false;
        print_r('задуманное число не входит в чис ряд');
    } else {
        if ($x != $userNumber) {
            $z = $x;
            $x += $y;
            $y = $z;
        } else {
            $status = false;
            print_r('входит в числовой ряд');
        }
    }
}
?>
