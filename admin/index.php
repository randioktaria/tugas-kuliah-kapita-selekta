<?php session_start();
include "../config/koneksi.php";

if(empty($_SESSION['username']) and empty($_SESSION['password'])){
	header("location:login.php");
}else{
?>

<title>SISTEM INFORMASI AKADEMIK</title>
<link rel="stylesheet" type="text/css" href="style.css">
<div class="container1">
  <div class="grid">
    <div class="dh12">
		SISTEM INFORMASI AKADEMIK
	</div>
  </div>
</div>
<div class="container">
  <div class="grid">
    <div class="dh3">
		<div class="topnav" id="myTopnav"> 
		  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
		  <a href="<?php echo "?p=home"; ?>">Beranda</a> 
	      <a href="<?php echo "?p=fakultas"; ?>">Fakultas</a> 
	      <a href="<?php echo "?p=jurusan"; ?>">Jurusan</a> 
	      <a href="<?php echo "?p=dosen"; ?>">Dosen</a> 
	      <a href="<?php echo "?p=mahasiswa"; ?>">Mahasiswa</a> 
	      <a href="<?php echo "?p=berita"; ?>">Berita</a>  
	      <a href="<?php echo "logout.php"; ?>">Logout</a>
		</div>
	</div>
	<script>
	function myFunction() {
		var x = document.getElementById("myTopnav");
		if (x.className === "topnav") {
			x.className += " responsive";
		} else {
			x.className = "topnav";
		}
	}
	</script>
	<div class="dh9">
	  <div id="isiadmin">
	  	<?php
	  	if(@$_GET['p'] == 'home' || @$_GET['p'] == '') {
	  		include 'home.php';
	  	} else if($_GET['p'] == 'fakultas') {
	  		include 'fakultas.php';
	  	} else if($_GET['p'] == 'fakultasadd') {
	  		include 'fakultasadd.php';
	  	} else if($_GET['p'] == 'fakultasedit') {
	  		include 'fakultasedit.php';
	  	} else if($_GET['p'] == 'jurusan') {
	  		include 'jurusan.php';
	  	} else if($_GET['p'] == 'jurusanadd') {
	  		include 'jurusanadd.php';
	  	} else if($_GET['p'] == 'jurusanedit') {
	  		include 'jurusanedit.php';
	  	} else if($_GET['p'] == 'dosen') {
	  		include 'dosen.php';
	  	} else if($_GET['p'] == 'dosenadd') {
	  		include 'dosenadd.php';
	  	} else if($_GET['p'] == 'dosenedit') {
	  		include 'dosenedit.php';
	  	} else if($_GET['p'] == 'mahasiswa') {
	  		include 'mahasiswa.php';
	  	} else if($_GET['p'] == 'mahasiswaadd') {
	  		include 'mahasiswaadd.php';
	  	} else if($_GET['p'] == 'mahasiswaedit') {
	  		include 'mahasiswaedit.php';
	  	} else if($_GET['p'] == 'beritaadd') {
	  		include 'beritaadd.php';
	  	} else if($_GET['p'] == 'berita') {
	  		include 'berita.php';
	  	} else if($_GET['p'] == 'bacaberita') {
	  		include 'bacaberita.php';
	  	}
	  	?>
	  </div>
	</div>
  </div>
</div>

<?php } ?>