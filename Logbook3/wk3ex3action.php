<?php

//switch statement to print the choosen course
  switch ($_POST["radcourse"])
  {
    case "HNC" : echo "You have selected an HNC course";
              break;
    case "HND" : echo "You have selected an HND course";
              break; 
    case "BSC" : echo "You have selected a BSC course";
              break; 
    case "PBSC" : echo "You have selected a ParttimeBSC course";
              break;
    default    : echo "No course selected";
  }
?>       
