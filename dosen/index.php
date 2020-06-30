<?php session_start();
include "../config/koneksi.php";

if(empty($_SESSION['kddosen']) and empty($_SESSION['password'])){
	header("location:../login.php");
}else{
?>

<title>DOSEN : SISTEM INFORMASI AKADEMIK</title>
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
		  <a href="<?php echo "?p=skripsidiajukan"; ?>">Skripsi Diajukan</a> 
		  <a href="<?php echo "?p=skripsiditerima"; ?>">Skripsi Diterima</a>
		  <a href="<?php echo "?p=skripsiditolak"; ?>">Skripsi Ditolak</a>
		  <a href="<?php echo "?p=gantipass"; ?>">Ganti Password</a>         
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
	  	} else if($_GET['p'] == 'skripsidiajukan') {
	  			include 'skripsidiajukan.php';
	  	} else if($_GET['p'] == 'skripsidtl') {
	  			include 'skripsidtl.php';
		} else if($_GET['p'] == 'skripsiditerima') {
	  			include 'skripsiditerima.php';
		} else if($_GET['p'] == 'skripsiditolak') {
	  			include 'skripsiditolak.php';
		} else if($_GET['p'] == 'gantipass') {
	  			include 'gantipass.php';
		}
	  	
	  	?>
	  </div>
	</div>
  </div>
</div>

<?php } ?>