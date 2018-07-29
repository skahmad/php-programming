<?php

	$colors = array("0"=>"Red","1"=>"Green","2"=>"Blue");

	print "0th element of array is " . $colors["0"]."\n";
	//looping
	foreach ($colors as $key=>$value){
		print "Key=".$key." value=".$value."\n";
	}

	$contacts = array('ahmad'=>'8972279330','akram'=>'8116166390',
	'ruhul'=>'7430902620','tarikul'=>'9635244541');
	print "printing contact array using print_r()\n";
	print_r($contacts);
	print "printing contacts array using foreach loop\n";
	foreach ($contacts as $name=>$phone) {
		print "Name : ".$name.", Phone : ".$phone."\n";
	}
?>
