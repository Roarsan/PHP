<html>
<body>
<?php

	//assigns variable its value
	$hourlyrate	= 5.75;
	$hoursperweek = 40;
	$Tax = 0.22;
	$space = " ";

	//calculates gross income
	$gross = $hourlyrate * $hoursperweek;
	
	//calculates tax
	$Taxed = $gross * $Tax ;

	//calculates after tax income
	$AfterTax = $gross - $Taxed;

	//prints after tax income
	echo "Your after tax income is".$space.$AfterTax;
?>
</body>
</html>
