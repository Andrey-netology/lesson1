<?php
$status = true;
$x = 1;
$y = 1;
$userNumber = rand(0.100);

echo "Число ".$userNumber;

while($status) {

    if ($x > $userNumber) {
        $status = false;
        print_r('задуманное число не входит в числовой ряд');
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
