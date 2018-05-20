<?php
	require("define.php");
 
	$con = mysql_connect(DB_HOST,DB_USER, DB_PASS);
	 if (!$con) {
	 	die("Connection failed: " . mysqli_connect_error());
	}
 	mysql_select_db(DB_NAME) or die("Cannot select DB");
?>