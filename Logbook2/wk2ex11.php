<?php
//assigns array its value
$mymarks["Co1"] = 55;
$mymarks["Co22"] = 65;
$mymarks["Co3"] = 75;
$mymarks["Co4"] = 55;
$mymarks["Co5"] = 65;
$mymarks["Co6"] = 75;
$total = 0;

// foreach loop that prints elements with module and marks
foreach($mymarks as $module => $marks)
{
  echo "for  $module  my grade was  $marks <br/>";
}

// foreach loop that adds elements with module and marks
foreach ($mymarks as $module => $marks)
{
    $total = $total + $mymarks[$module];
}

//calculates average
$average = $total / 6;

//prints average
echo "my average was".$average;
?>
