<?php
$mymarks = [20,50,40,30,10,60];

$total = 0;

for ($i =0; $i<6; $i++)
{
    $total = $total + $mymarks[$i];
}

$average = $total / 6;
echo $average
?>
