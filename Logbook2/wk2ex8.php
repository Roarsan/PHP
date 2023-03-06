<?php
//assigns array its value
  $topModules[0] = "Internet Systems Development";
  $topModules[1] = "Programming 1";
  $topModules[2] = "Programming 2";
  $topModules[3] = "OOAD";
  $topModules[4] = "Software Engineering";
  $topModules[5] = "Networking";
  $topModules[6] = "Web Apps";

  //uses for loop to count number of module
  for($i = 0; $i < 7;$i++)
  {
    echo "$i module is $topModules[$i]<br/>";
  }	  
?>
