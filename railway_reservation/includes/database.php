<?php
	define("DB_SERVER","localhost");
	define("DB_USER","root");
	define("DB_PASS","");
	define("DB_NAME","railway");
	$connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
	//Test is connection is succeesed
	if(mysqli_connect_errno()) {
		die("Database Connnection failed : " . mysqli_connect_error() .
		"(" . mysqli_connect_errno() . ")");
	}
  #echo "Hey you are connented";
 ?>
