<?php

include 'conn.php';

if(isset($_POST['ID'])){
	$id = $_POST['ID'];
	$sekolah = $_POST['SEKOLAH'];
	$sql = "INSERT INTO academic VALUES ('$id','$sekolah')";
	if(mysqli_query($conn,$sql)){
		echo "BERHASIL MENAMBAH DATA RIWAYAT PENDIDIKAN";
	}else{
		echo "ERROR MANMBAH DATA RIWAYAT PENDIDIKAN <br/>".mysqli_error($conn);
	}
}