<?php include "config/koneksi.php";?>
<link rel="stylesheet" type="text/css" href="style.css">
<title>SISTEM INFORMASI AKADEMIK</title>
<div class="container1">
  <div class="grid">
    <div class="dh6">
	  SISTEM INFORMASI AKADEMIK
	</div>
    <div class="dh6" align="right" style="font-size:14px">
	  <a href="login.php" target="_blank"><button class="btn btn-edit">Login</button></a>
	</div>
  </div>
</div>
<div class="container">
  <div class="grid">
    <div class="dh12">
	  <div class="topnav" id="myTopnav">
	  <a href="javascript:void(0);" style="font-size:14px;" class="icon" onclick="myFunction()">&#9776;</a>
	  <a href="<?php echo "?p=home"; ?>">Home</a>
	  <a href="<?php echo "?p=berita"; ?>">Berita</a>
	  <a href="<?php echo "?p=visimisi"; ?>">Visi & Misi</a>
	  <a href="<?php echo "?p=struktural"; ?>">Struktural</a>
	  </div>
	</div>
	<script>
	function myFunction(){
	  var x = document.getElementById("myTopnav");
	  if(x.className === "topnav"){
	    x.className += " responsive";
	  }else{
	    x.className = "topnav";
	  }
	}
	</script>
  </div>
</div>


<div class="container2">
  <div class="grid">	
    <div class="dh9">
	<div class="dh12">
	<?php
	if(@$_GET['p'] == 'home' || @$_GET['p'] == '') {
		include 'berita.php';
	} else if($_GET['p'] == 'berita') {
		include 'berita.php';
	} else if($_GET['p'] == 'visimisi') {
		include 'visimisi.php';
	} else if($_GET['p'] == 'struktural') {
		include 'struktural.php';
	} else if($_GET['p'] == 'bacaberita') {
		include 'bacaberita.php';
	}
	
	?>
    
	</div>
	</div>
	<?php include "profil.php"?>
  </div>
</div>
<div class="container3">
  <div class="grid">	
    <div class="dh12">
	SISTEM INFORMASI AKADEMIK UPI "YPTK" PADANG. Copyright &copy; Randi Oktaria Rinanda. 2018
	</div>
  </div>
</div>
