<?php
	$serverIP = 'localhost';
	$mysqluser = 'phptest'; // this user do not have permission to create database;
	$mysqlpass = 'testphp';
	$dbname = 'php'; 
	$tablename = 'fruitlist';

	// mysqli(serveradd, username,password, dbname);
	// mysqli(serveradd, username,passoword, host);
	// mysqli(serveradd, username,password);

	print"** create connection\n";
	$conn = new mysqli($serverIP,$mysqluser, $mysqlpass,$dbname);
	if($conn->error)
		die("Connection field".$conn->error."\n");
	print "** connected to MySql\n";
	print "** creating database ...\n";

	$msstatement = "CREATE DATABASE animals";
	if($conn->query($msstatement) === TRUE)
		print "** Database created successfully!\n";
	else {
		print "** Sorry! you havn't permission create database\n";
		print "** Data base create error!\n\t".$conn->error."\n";
	}


	print "** inserting data to fruitlist table\n";
	$msstatement = "insert into $tablename values('Watermelon',20.0,3.00)";
	if($conn->query($msstatement) === TRUE)
		print "** record added successfully!\n";
	else
		print "** cann't add record to the table fruitlist\n\t".$conn->error."\n";
	$conn->close();
?>


