<?php

include 'conn.php';

$sql = "SELECT * FROM academic";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){
		$link_delete = "<a class='hapusData' href='delete.php?ID=".$row['ID']."'>Delete</a>";
		echo $row['ID'].", SEKOLAH : ".$row['SEKOLAH'] . ". | $link_delete <br/>";
	}
}