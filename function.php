<?php
	print "this script for testing function\n";
	print "--------------------------------\n";
	function power($base, $p) {
		return $base**$p;
	}
	print "2^3 is ".power(2,3)."\n";

	function getCircleArea($radius) {
		return $radius*$radius*3.14;
	}
	print "Area of Circle which radius is 5.2 is : ".getCircleArea(5.2)."\n";

	$globalvar = 10;
	function changeGlob($gvar) {
		print "function call by value\n";
		$gavr = 25;
		print "Value change to 25\n";
	}
	function globeChange(&$gvar) {
		print "function call by referance\n";
		$gvar = 25;
		print "Value change to 25\n";
	}
	print "Global Variable : $globalvar\n";
	changeGlob($globalvar);
	print "Global variable : $globalvar\n";
	globeChange($globalvar);
	print "Global variable : $globalvar\n";


	function doSomethings() {
		static $init = true;
		if($init) {
			print "You are calling this methods first time.\n";
			$init = false;
		}else {
			print "You have called this method in previous.\n";
		}
	}
	doSomethings();
	doSomethings();
	doSomethings();


	$name='root';
	if($name == 'root'):
		function tellme($name) {
			print "User Name is : $name\n";
		}
		tellme($name);
	else:
		print "User not found!\n";
	endif;

	/*
		exit([$string]) or
		die([$string])

		for stor the current execution of the script
		and output the string
	*/
	//die($name);
	print $name."\n";

	$flag = 5>3;
	if($flag){
		function apple() {
			print "** function name is : apple().\n";
			print "** This function inside condition.\n";
			print "** if condition is TRUE then the function is defined\n";
			print "** other wise not\n";
		}
	}
	function banana() {
		print "function name is : banana()\n";
	}
	if($flag)
		apple();
	banana();
	print "\n\n";
?>
