<?php
	define("PI","3.14");
	print "Value of PI is : ".PI."\n";

	$age = 20;
	$age = $age + 5;
	print "Age : $age\n";
	$age += 3;
	print "Age : age+3=$age\n";
	$age = $age*2;
	print "Age : age*2=$age\n";
	$age = $age/5;
	print "Age : age/5=$age\n";
	$age = $age%2;
	print "Age : age%2=$age\n";
	$age = $age**2;
	print "Age : age**2 = $age\n";

	$age = 20;
	print "Age : $age\n";
	print "Age : post increament age++ = ".$age++."\n";
	print "Age : $age\n";

	print "Age : pre increament ++age = ".++$age."\n";

	$flag = 0;
	$found = 1;
	if($flag and $found)
		print "Both are true\n";
	if($flag or $found)
		print "One of these is true or both.\n";
?>

