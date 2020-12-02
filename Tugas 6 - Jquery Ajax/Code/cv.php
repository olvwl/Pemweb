<?php

$nama = "Melania Syafrida P";
$pekerjaan = "Student";
$about = "About";
$profile = "Profile";
$kontak = "Contact"; 
$Academic = "Academic Resume";
$Movie = "Favorite Movie";
$hobi = "Hobby";
?>

<?php
$conn = mysqli_connect("localhost","root","","cv");
$isiacademic = mysqli_query($conn,"SELECT * FROM  academic");
$isimovie = mysqli_query($conn,"SELECT * FROM  movie");
$isihobi = mysqli_query($conn,"SELECT * FROM hobi");
$isikontak = mysqli_query($conn,"SELECT * FROM  contact");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title>PROFILE</title>
  <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="resume">
   		<div class="resume_left">
     		<div class="resume_profile">
     			<img src="img.jpeg">
     		</div>
     	<div class="resume_content">
       		<div class="resume_item resume_info">
         		<div class="title">
           			<p class="bold"><?php echo $nama ?></p>
           			<p class="regular"><?php echo $pekerjaan ?></p>
         		</div>
         		<div class="title2">
           			<p class="bold1"><?php echo $about ?></p>
           			<p class="regular1">Hi, My name is Melania Syafrida P. I   am 20 years old. I like sleeping, programming, 
                    studying and playing <br> games. You can contact me and playing game together. 
                    Thank you.<br>Have a good day~</p>
         		</div>
         		<div class="title3">
           			<p class="bold2"><?php echo $profile ?></p>
           			<p class="regular2">Birth : 04-01-2000 <br> Location : Indonesia<br> Gender : Female</p>
         		</div>
         		<div class="title4">
              <p class="bold3"><?php echo $kontak ?></p>
               <?php while ($row = mysqli_fetch_assoc($isikontak)):?>
                <p class="regular3"><?= $row["CONTACT"];?></p>
                <?php endwhile?>
           		</div>
        	</div>
    	</div>
    </div>
    <div class="resume_right">
    	<div class="resume_item resume_work">
        	<div class="title">
           		<p class="bold"><?php echo $Movie ?></p>
         	</div>
         <ul>
          <?php while ($row = mysqli_fetch_assoc($isimovie)):?>
            <li>
               <div class="gambar", align=center>
     			       <img src="<?= $row["IMAGE"];?>" width=30%,height=10px,align=center>
     		        </div>
                <div class="date"> 
                  <center><?= $row["JUDUL"];?></center></div> 
            </li>
          <?php endwhile?>
        </ul>
      </div>
    		<div class="resume_item resume_work">
        		<div class="title">
           			<p class="bold"><?php echo $Academic ?></p>
         		</div>
            <ul>
              <form action="simpan.php" method ="POST">
                <input type="text" name="ID" placeholder="Nomor"/>
                <input type="text" name="SEKOLAH" placeholder="Academic Resume"/>
                <input type="submit" name="submit" value="Save"/>
              </form>
              <hr/>
              <div id="user_data">
                
              </div>
              <script>
                $(document).ready(function(){ 
                  load_data();

                  $('form').on('submit',function(e){
                    e.preventDefault();
                    $.ajax({
                      type:$(this).attr('method'),
                      url:$(this).attr('action'),
                      data:$(this).serialize(),
                      success:function(){
                        load_data();
                        resetForm();
                      }
                    });
                  })
                })
                  function load_data(){
                    $.get('data.php',function(data){
                      $('#user_data').html(data)
                      $('.hapusData').click(function(e){
                        e.preventDefault();
                        $.ajax({
                          type:'get',
                          url:$(this).attr('href'),
                          success:function(){
                            load_data();
                         }
                        });
                      })
                    })
                  }
                  function resetForm(){
                    $('[type=text]').val('');
                    $('[name=academic]').focus();
                  }
              </script>
            </ul>
    	  </div>
    	<div class="resume_item resume_work">
        	<div class="title">
           		<p class="bold"><?php echo $hobi ?></p>
         	</div>
        <ul>
          <?php while ($row = mysqli_fetch_assoc($isihobi)):?>
            <li>
                <div class="gambar", align=center>
     			       <img src="<?= $row["IMAGES"];?>" width=30%,height=10px,align=center>
     		        </div>
                <div class="date">
                  <center><?= $row["NAMA"];?></center></div> 
            </li>
            <?php endwhile?>
        </ul>
    	</div>
  	</div>
	</div>
</body>
</html>