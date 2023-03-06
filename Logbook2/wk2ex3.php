<?php 

	//assigns constant the passing grade
	define("PASS_GRADE",40);

	//prints the passing grade
	echo "You need " . PASS_GRADE . " % or more to pass. <br/>";
	//calculates marks needed for a merit
	$grade = PASS_GRADE  + 15;
	//prints marks needed for a merit
	echo "To achieve a merit you need $grade %  or more <br/>";
	//calculates marks needed for a distinction
	$grade = PASS_GRADE  + 30;
	//prints marks needed for distinction
	echo "To achieve a distinction you need $grade %  or more <br/>";
   
?>	
