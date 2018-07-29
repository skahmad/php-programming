<?php
	$colors = array("Red","Green","Blue");

	$colors1[0] = "Red";
	$colors1[1] = "Green";

	$length = count($colors);
	print "colors array length=" . $length."\n";
	// prints "colors array length=3"
	print "colors1 array length=" . count($colors1)."\n";
	// prints "colors1 array length=2"

	//looping an indexed array
	for($i=0; $i<$length; $i++){
		echo $colors[$i];
		print "\n";
	}
?>
