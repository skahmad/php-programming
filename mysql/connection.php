<?php
	//include("dbauth.php");
	$serverAddress = 'localhost';
	$mysqlUser = "phptest";
	$mysqlPassword = "testphp";
	$dbName = "php";
	$tableName = "fruitlist";

	//******************   OOP Procedural   *********************
	$conn = new mysqli($serverAddress, $mysqlUser,$mysqlPassword);
	print "Checking Mysql Connection using OOP\n";
	print "--------------------------------------\n";
	if($conn->connect_error) {
		die("** Connection field to Mysql Database!\n".$conn->connect_error);
	}
	else
		print "** Connect Successfully!\n";
	print "** closing connection in OOP procedure\n";
	$conn->close();
	print "**********************************************\n";

	//****************   stsrucral procedure  ******************

	// or we can check connection using this statement
	$conn = mysqli_connect($serverAddress, $mysqlUser, $mysqlPassword);
	if(!$conn) {
		die("** Connection field to Mysql Database!\n".mysql_connect_error());
	}
	else
		print "** Connection Successfully!\n";
	print "** closing connection in structural procedure\n";
	mysqli_close($conn);

	//*******************   PDO  procedural  ********************
	print "*********************************************\n";
	print "Checking connection using PDO\n";
	print "\n-----------------------------\n";

	try {
		$conn = new PDO("mysql:host=$serverAddress;$dbName",$mysqlUser,$mysqlPassword);
		// set PDO Error to Exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		print "** Connection Successfull using PDO\n";
	}catch(PDOException $pdoex) {
		print "** Connection Field to Mysql Database using PDO\n".$pdoex->getMessage();
	}

	print "** closing connection in PDO\n";
	$conn = null;
?>

