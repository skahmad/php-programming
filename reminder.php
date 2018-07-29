<?php
	$number = 13;
	while($number != 0) {
		$rem = $number % 10;
		$number = (int)($number/10);
		print "rem : $rem, number : $number\n";
	}

	$price = 5.532;
	print "Price : $price, aquerate : ".(int)$price."\n";
?>
