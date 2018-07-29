<?php
	$numbers = range(10,0);
	print "Total number of the array is : ".count($numbers)."\n";

	foreach($numbers as $number):
		print $number." ";
	endforeach;
	print "\n";

	$laters = range('s','y');
	print "Total charecter of the array is : ".count($laters)."\n";
	foreach($laters as $charecter) {
		print $charecter." ";
	}
?>

