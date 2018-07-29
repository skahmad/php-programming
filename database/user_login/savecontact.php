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
                <link rel="stylesheet" href="style.css"/>
        </head>
        <body>
        	<div class="">
		    	<div data-role="appbar" class="app-bar">
					<ul class="app-bar-menu">
						<li><a href="public_page.php">Back</a></li>
					</ul>
				</div>
				
				<?php
					require("checkconn.php");
					$name = $_POST['name'];
					$phone = $_POST['phone'];

					$flag = isset($name);
					$flag = isset($phone);
					if($flag) {
						$s = "insert into $contable values('$name','$phone','');";
						$st = $conn->query($s);
						if(!$st)
							print $st.$conn->error;
						else
							print "<h1>Contact Create Successfully.</h1>";
					}else{
						//redirect to create new page
					}
				?>
			</div>
        </body>
</html>

