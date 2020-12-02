<?php
	$servername = "localhost";
	$username = "root";
	$passowrd = "";
	$database = "cv";

	$conn = mysqli_connect($servername,$username,$passowrd,$database);

	if(!$conn){
		die("Conection failed :".mysqli_connect_error());
	}
