<?php
$conn = mysqli_connect("localhost","root", "", "cv");
	$edu = mysqli_query($conn,"SELECT * FROM academic"); 
	$education = mysqli_fetch_row($edu);
	echo ($education[1]);	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>