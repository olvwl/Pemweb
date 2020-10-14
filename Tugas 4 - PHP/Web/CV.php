<?php
    $home= "Home";
    $academic= "Academic Resume";
    $movie= "Favorite Movie";
    $hobby = "Hobby";
    $contact= "Contact";
    $nama = "Melania Syafrida P";
    $sd = "SDN TAMBAK SAWAH";
    $smp = "SMPN 2 SEDATI";
    $sma = "SMA 17 AGUSTUS 1945";
    $univ = "UPN Veteran Jatim";
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


			<div class="resume">
				<div class="sekolah">
					<img src="edu.png">
					<p><?php echo $sd?></p>
				</div>
				<div class="sekolah">
					<img src="edu.png">
					<p><?php echo $smp?></p>
				</div>

				<div class="sekolah">
					<img src="edu.png">
					<p><?php echo $sma?></p>
				</div>

				<div class="sekolah">
					<img src="edu.png">
				    <p><?php echo $univ?></p>
				</div>
			</div>
	</div>

	<div class="movie">
		<h2 id="film"><?php echo $movie?></h2>

		<div class="isi">
			<div class="move">
				<img src="silence.jpg">
				<p><?php echo $silenced?></p>
			</div>
			<div class="move">
				<img src="zootopia.jpg">
				<p><?php echo $zootopia?></p>
			</div>
			<div class="move">
				<img src="silence voice.jpeg">
				<p><?php echo $asilence?></p>
			</div>
			<div class="move">
				<img src="kim ji young.jpg">
				<p><?php echo $kim?></p>
			</div>
		</div>
		
    </div>
    
    <div class="Hobbys">
		<h2 id="hobi"><?php echo $hobby?></h2>

		<div class="wadah">
			<div class="box">
				<img src="night.png">
				<p><?php echo $sleep?></p>
			</div>
			<div class="box">
				<img src="gameboy.png">
				<p><?php echo $game?></p>
			</div>
			<div class="box">
				<img src="study.png">
				<p><?php echo $study?></p>
			</div>
			<div class="box">
				<img src="music.png">
				<p><?php echo $listen?></p>
			</div>
		</div>
	</div>


	<div class="kontak">
		<h2 id="contactme"><?php echo $contact?></h2>

		<div class="data">
			<div class="datakiri">
				<div class="kotak">
					<img src="hp.png">
					<p><?php echo $hp?></p>
				</div>
				<div class="kotak">
					<img src="mail.png">
					<p><?php echo $mail?></p>
				</div>
			</div>
			
			<div class="datakanan">
				<div class="kotak">
					<img src="home.png">
					<p><?php echo $loc?></p>
				</div>
				<div class="kotak">
					<img src="find.png">
					<p><?php echo $ig?></p>
				</div>
			</div>
			
		</div>

	</div>
</body>
</html>