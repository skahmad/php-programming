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
						<li><a href="createnew.php">Create New</a></li>
					</ul>
					<ul class="app-bar-menu place-right">
						<?php
							session_start();
							$username = $_SESSION['username'];
							if(isset($username)){
								print "<li><a href=''>$username</a></li>";
								print "<li><a href='userprofile.php'>Logout</a></li>";
							}else{
								print "<li><a href=\"login.php\">Login</a></li>
						<li><a href=\"signup.php\">Signup</a></li>";
							}
							
						?>
						
					</ul>
				</div>
				
				<div class="container page-content">
					<?php
						require("checkconn.php");
						$s = "select name,phone from persons;";
						$list = $conn->query($s);
						if($list->num_rows>0) {
							print "<table class=\"table border bordered hovered\">
						<thead>
							<tr>
								<th>Name</th>
								<th>Phone</th>
							</tr>
						</thead>
						<tbody>";
							while ($tuple = $list->fetch_assoc()) {
								print "<tr>";
								print "<td>".$tuple['name']."</td>";
								print "<td>".$tuple['phone']."</td>";
								print "</tr>";
							}
							print "</tbody></table>";
						}else{
							print "<h1>No Contacts found in the Database</h1>";
						}
						
					?>
				</div>
        </body>
</html>

