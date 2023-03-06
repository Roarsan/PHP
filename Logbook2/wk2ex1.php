<?php
	//assigns variables to its value
	$hourlyrate	= 5.75;
	$hoursperweek = 40;
	//calculates gross
	$gross = $hourlyrate * $hoursperweek;
?>	
<html>
<head></head>
<body>
	<!--prints gross -->
	<p> My gross wage is <?php print("$gross"); ?>
</body>
</html>

