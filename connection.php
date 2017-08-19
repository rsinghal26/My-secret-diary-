<?php

	$servername = "localhost";
	$username = "root";
	$password = "";

	$link = mysqli_connect($servername, $username, $password, "raja_users");
	if(mysqli_connect_error()){

		die("Problem bro..!!");
	}


?>