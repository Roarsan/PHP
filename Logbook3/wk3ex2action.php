<?php
//prints the appropriate message when it meets the conditions for age
  if ($_POST["txtage"] < 21) 
  {
	echo "You are under 21 years old<br/>";
  }
  else
  {
	echo "You are  21 years old or over<br/>";
  }

  //prints the appropriate message when it meets the conditions for gender
  if ($_POST["radsex"] == 'male') 
  {
	echo "Your gender is $_POST[radsex]<br/>";
  }
  elseif  ($_POST["radsex"] == 'female') 
  {
	echo "Your gender is $_POST[radsex]<br/>";
  }
  else 
  {
	echo "Please choose your gender";
  }

  
?>
