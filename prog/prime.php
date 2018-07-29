<?php
	$counter = 23;
	$limit = 25;
	while($counter != $limit) {
		$number = $counter;
		$flag = 0;
		$lastDivider = $number/2;
		for($i = 2; $i<=$lastDivider; $i++) {
			if($number%$i != 0) {
				$flag = 1;
				break;
			}
		}
		if($flag)
			print "$number is not prime\n";
		else
			print "$number is prime\n";
		$counter++;
	}
?>

