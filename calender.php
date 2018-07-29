<?php

	$weekday = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
	$monthday = array(31,28,31,30,31,30,31,31,30,31,30,31);

	$monthname = array("January","February","March","April","May","June","July",
"August","September","October","November","December");

	$year = 1946;
	$oddday = 0;

	print "Year is : $year\n";
	$rem = $year%400;
	$rem = $rem%100;

	// finding odd day
	if($rem == 100)
		$oddday += 5;
	else if($rem == 200)
		$oddday += 3;
	else if($rem == 300)
		$oddday += 1;
	else
		$oddday += 0;
	// counting leap year and normal year
	$leapyear = (int)($rem/4);
	$normalyear = $rem - $leapyear;

	$oddday += $leapyear*2 + $normalyear;

	print "Total Odd Day : $oddday\n";
	$extraday = $oddday%7;
	print "Starting day of the year is : $extraday\n";
	print "LeapYear : $leapyear\n";
	print "Normal Year : $normalyear\n";
	print "\n";

	function getOddDay($year) {

	}
	

	// project incomplete
?>
