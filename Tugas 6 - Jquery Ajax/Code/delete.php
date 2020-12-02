<?php

include 'conn.php';
if(isset($_GET['ID'])){
	$delete = mysqli_query($conn, "DELETE FROM academic WHERE ID = '".$_GET['ID']."' ");
}