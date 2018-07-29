<?php
	/*
	1. getcwd(); // get current working directory
	2. chdir($string); // change current working directory
	3. scandir($string directory); // return all file and directory
	4. mkdir
	5. rename
	6. copy
	7. rmdir($string directoryname);
	8. is_dir($directory);
	*/
	$currentWorkingDirectory = ".";
	$list = scandir($currentWorkingDirectory);

	if(is_dir("oop")){
		print "OOP Is a Directory.\n";
		print "path is :".dir("oop")->path."\n";
	}
	else
		print "It is not a directory.";









?>

