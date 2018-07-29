<?php
	$dbname = "contacts";
	$usrtable = "users";
	$contable = "persons";
	
	$conn = new mysqli("localhost","root","moon2light",$dbname);
	if($conn->connect_error) {
		die("connection error : ".$conn->connect_error);
	}
	/*
	if($conn)
		print "OK Connection";
	else
		print "Connect Error!";

		*/
		
	if($conn) {
		function checkUser($username,$authkey) {
			$s = "select authkey from users where username='ahmad'";
			$sts = $conn->query($s);
			print "OK $sts";
			return $sts;
		}
		function addUser($username, $authkey, $email) {
			$s = "insert into $usrtable values('$username','$authkey','$email');";
			$result = $conn->query($s);
			
			return ($result.$conn->error);
		}
		function getAllContacts() {}
		function addContact($name, $phone) {
			$s = "insert into $contable values($name,$phone,'');";
			$result = $conn->query($s);
		}
		function sayHello() {
			print "Wel come";
		}
	}
	




?>
