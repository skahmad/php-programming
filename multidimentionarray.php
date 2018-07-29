<?php
	$names = array("ahmad","akram","tarikul","ruhul");
	$emails = array("ahmad.sk98@gmail.com","","tarik.md91@gmail.com","ruhul.sk156@gmail.com");

	$fruits = array('a for'=>'apple','b for'=>'banana','o for'=>'orange','m for'=>'mango','g for'=>'grap');

	// two array are created name $names and $emails
	$contacts = array($names,array("apple","banana",
								"mango","orange","grap"));

	// $names is inserted to $contracts multi-array and a dynmaic array is put into the $contacts array at the creation time

	$contacts[] = $emails; // push array item at the end
	$contacts[]="new contact"; // push single item to the end of the array
	
	$contacts[] = $fruits; // pushing an associative array at the end. 
	//print_r($contacts);	//printing array using print_r() or var_dump()

	$contacts[]="Ubuntu 16.04 LTS"; // pushing single item to the array $contacts

	// traversal multidimantional array
	foreach($contacts as $sinarr):
		if(is_array($sinarr)):
			foreach ($sinarr as $key => $value) {
				print "$key : $value\n";
			}
		else:
			print "$sinarr. // it is not an array\n";
		endif;
		print "-----------------\n";
	endforeach;
?>
