<?php
	$dbname = "contacts";
	$usrtable = "users";
	$contable = "persons";
	//person table entity type [ name varchar(33), phone varchar(10), email varahr(32) ]
	// user table entity type [ username varchar(32), authkey varchar(128), email varchar(32) ]
 	$conn = new mysqli("localhost","mysqlUserName","yourPassword",$dbname);
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
			$s = "select authkey from $usrtable where username='ahmad'";
			$sts = $conn->query($s);
			print "OK $sts";
			return $sts;
		}
		function addUser($username, $authkey, $email) {
			$s = "insert into $usrtable values('$username','$authkey','$email');";
			$result = $conn->query($s);
			
			return ($result.$conn->error);
		}
		function getAllContacts($conn) {
			if($conn->connect_errno) {
				return null;
			}
			$contacts = array();
			if($conn->num_rows >0) {
				while($tuple = $conn->fetch_assoc()) {
					$contacts[] = array($tuple['name'],$tuple['phone'],$tuple['email']);
				}
			}
			return $contacts;
			
		}
		function addContact($name, $phone) {
			$s = "insert into $contable values($name,$phone,'');";
			$result = $conn->query($s);
		}
		function sayHello() {
			print "Wel come";
		}
	}
	




?>
