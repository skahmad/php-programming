<?php
	$temp_in_celcius = 37.0; // in degree centigred, here i am using static value
	// for dynamic value, you can use this statement below
	// $temp_in_celcius = $_POST['celcius'];
	$temp_in_fahrenhiet = (float)((9*$temp_in_celcius+160)/5);
	print "Temperature : $temp_in_celcius".chr(0Xb0)."C = $temp_in_fahrenhiet".utf8_encode(chr(0176))."F\n";
	
?>

