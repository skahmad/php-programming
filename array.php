<?php

	// Indexed array
	$contactName = array("ahmad","ruhul","tarikul","akram","debdas","barun");
	//print_r($contactName);
	sort($contactName); // for sorting ascending order
	//print_r ($contactName);
	rsort($contactName); // this rsort for revers order sorting
	print_r($contactName);

	//associative array
	$contacts = array("akram"=>"8116166390","ahmad"=>"8972279330",
	'tarikul'=>'9635244541',"ruhul"=>"7430902620",'bablu'=>'8112564782');
	print_r($contacts);
	// sorting associative array by value
	asort($contacts);
	print_r($contacts);
	// sorting associative array by key
	ksort($contacts);
	print_r($contacts);

	// using while loop printing array
	$flag = count($contacts);
	print ($flag."\n");

	$name = "ahmad";
	$age = 23;
	$email = "ahmad.sk98@gmail.com";
	$person = array('name','age','email');
	print_r($person);
	print "Traversing array ...\n";
	$i =1 ;
	foreach ($person as $item) {
		print "Array[".($i++)."] ".$item."\n";
	}

	$contacts = array(array("ahmad"=>"8972279330","tarikul"=>"9635244541"),array("ahmad"=>"ahmad.sk98@gmail.com","tarikul"=>"tarik.md91@gmail.com"),"akram"=>"8116166390");
	print "printing multidimention array ....\n";
	print "-------------------------------------\n";


	/*
		explode(string delimiter, string string, int limit)
		// create array of string from string seperated by delimiter
		implode(limiter, string)
		// create stsring from array object using joining string
	*/

	$fruitList = "apple,banana,orange,mango,grape,lemon";
	$fruite = explode(',',$fruitList);
	print "This array created by explode method\n";
	print_r($fruite);

	$twoFruit = explode(",",$fruitList, 2);
	print "create array of two item from fruit array using explode method\n";
	print_r($twoFruit);



?>
