<?php

    $home= "Home";
    $academic= "Academic Resume";
    $movie= "Favorite Movie";
    $hobby = "Hobby";
    $contact= "Contact";
    $nama = "Melania Syafrida P";
    $silenced = "Silenced (2011)";
    $zootopia = "Zootopia (2016)";
    $asilence = "A Silent Voice (2016)";
    $kim = "Kim Ji Young (2019)";
    $sleep = "Sleeping";
    $game = "Gaming";
    $study = "Studying";
    $listen = "Listening";
    $hp = "0895367289456";
    $mail = "syafridamelania@gmail.com";
    $loc = "Indonesia";
    $ig = "mlniasyfrda";

	$conn = mysqli_connect("localhost","root", "", "cv");
	$edu = mysqli_query($conn,"SELECT * FROM academic"); 
	$film = mysqli_query($conn,"SELECT * FROM movie");

	$myhobi = mysqli_query($conn,"SELECT * FROM hobi");
	$cp = mysqli_query($conn,"SELECT * FROM contact");
//	$education = mysqli_fetch_row($edu);
//	$sd = var_dump($education[1]);	

	
?>
<!DOCTYPE html>
<html>
<head>
	<title>PROFILE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body bgcolor="#000000">
	<div class="container">
		<div class="menu">
			<ul>
				<li class="active"><?php echo $home?></li>
				<li><a href="#kelas"><?php echo $academic?></a></li>
				<li><a href="#film"><?php echo $movie?></a></li>
				<li> <a href="#hobi"><?php echo $hobby?></a></li>
				
			</ul>
		</div>

		<div class="banner">
			<div class="app-text">
                <h1> Welcome To </h1>
                <h1>My Profile</h1>
				<p>Hi, My name is <?php echo $nama?>. I   am 20 years old. I like sleeping, programming,<br> 
                studying and playing games. You can contact me and playing game together.<br> 
                Thank you. Have a good day~</p>
				<div class="bar">
					<div class="nama">
						<p><a href="#contactme"><?php echo $contact?></a></p>
					</div>
				</div>
			</div>
			<div class="app-picture">
				<img src="foto.jpeg">
			</div>
		</div>
	</div>

	<div class="academic">
		<h2 id="kelas"><?php echo $academic?></h2>
		<div class="academic_temp">
			<?php while($row = mysqli_fetch_assoc($edu)) : ?>
				<div class="sekolah">
					<img src="edu.png">
					<p><?= $row["SEKOLAH"];?></p>
				</div>
			<?php endwhile?>
		</div>
	</div>

	<div class="movie">
		<h2 id="film"><?php echo $movie?></h2>
		<div class="isi">
			<?php while($row = mysqli_fetch_assoc($film)) : ?>
				<div class="move">
					<img src="<?= $row["IMAGE"];?>">
					<p><?= $row["JUDUL"];?></p>
				</div>
			<?php endwhile?>
		</div>	
    </div>
    
    <div class="Hobbys">
		<h2 id="hobi"><?php echo $hobby?></h2>
		
		<?php while($row = mysqli_fetch_assoc($myhobi)) : ?>
		<div class="wadah">
			<div class="box">
				<img src="<?= $row["IMAGES"];?>">
				<p><?= $row["NAMA"];?></p>
			</div>
		</div>
		<?php endwhile?>
	</div>


	<div class="kontak">
		<h2 id="contactme"><?php echo $contact?></h2>
		
			<div class="wadah">
				<?php while($row = mysqli_fetch_assoc($cp)) : ?>
				<div class="box">
					<img src="<?= $row["IMAGES"];?>">
					<p><?= $row["CONTACT"];?></p>
				</div>
				<?php endwhile?>
			</div>


	</div>
</body>
</html>