<?php
	$basicSalary = 15000;
	$da = $basicSalary*52/100;
	$hra = $basicSalary*15/100;
	$pf = $basicSalary*12/100;
	$gross = $basicSalary+$da+$hra+$pf;
	$net = $basicSalary - $pf;

	print "Basic Salary : $basicSalary\n";
	print "Da : $da\n";
	print "Hra : $hra\n";
	print "Pf : $pf\n";
	print "Gross : $gross\n";
	print "Net : $net\n";
?>
