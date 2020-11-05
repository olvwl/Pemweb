<?php 

function connection() {
   
   $dbServer = 'localhost';
   $dbUser = 'root';
   $dbPass = '';
   $dbName = "toko";

   $conn = mysqli_connect($dbServer, $dbUser, $dbPass);

   if(! $conn) {
	die('Koneksi gagal: ' . mysqli_error($conn));
   }
   mysqli_select_db($conn,$dbName);
	
   return $conn;
}