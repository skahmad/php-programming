
<!DOCTYPE html>
<html lang="en">
        <head>
                <title>Public Contacts</title>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=no">
                <!--
                <link rel="stylesheet" href="http://localhost/cdn/metro/v3/css/metro-all.min.css"/> -->
                <link rel="stylesheet"  href="http://localhost/cdn/metro/v3/css/metro.css"/>
                <script src="http://localhost/cdn/jquery/jquery.js"></script>
                <srcipt src="http://localhost/cdn/metro/v3/js/metro.js"></scrip>
        </head>
        <body>
        	
		    	<div data-role="appbar" class="app-bar">
					<ul class="app-bar-menu">
						<li><a href="public_page.php">Home</a></li>
					</ul>
					<ul class="app-bar-menu place-right">
						<li><a href="login.php">Back</a></li>
					</ul>
				</div>
				
				<div class="container page-content">
					<?php
						
						require("checkconn.php");
						$name = $_POST['name'];
						$password = $_POST['authkey'];
	
						$flag = isset($name);
						$flag = isset($password);
	
						if($flag) {
							$s = "select username,authkey from $usrtable;";
							$list = $conn->query($s);
							$found = false;
							if($list->num_rows > 0) {
								while($tuple = $list->fetch_assoc()) {
									if($tuple['username'] == $name){
										if($tuple['authkey']  == $password) {
											print "<h1>User found!</h1>";
											// create session
											session_start();
											$_SESSION['username']=$name;
											// start session
											$found = true;
											break;
										}
									}
								}
								if(!$found)
									print "<h1>User Not found!</h1>";
							}else{
								print "<h1>User Not found!</h1>";
							}
						}

					?>
				</div>
        </body>
</html>

