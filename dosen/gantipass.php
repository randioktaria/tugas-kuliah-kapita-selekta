<h3>Ganti Password</h3>
<form method="POST" action="">
<p>
	<input type="Password" name="password" placeholder="Password Lama">
</p>
<p>
	<input type="password" name="pas_new" placeholder="Password Baru">
</p>
<p>
	<input type="password" name="pas_new2" placeholder="Konfirmasi Password Baru">
</p>
<p>
	<input type="submit" name="ganti" value="Ganti">
</p>
</form>
<?php 
if(isset($_POST['ganti'])){
	$password  = $_POST['password'];
	$pass_new  = $_POST['pas_new'];
	$pass_new2 = $_POST['pas_new2'];

	$cek = mysqli_query($kon, "select * from dosen where password = '$password' and kddosen = '$_SESSION[kddosen]'");

	if(mysqli_num_rows($cek) > 0){
		if($pas_new == $pas_new2){
			$ganti = mysqli_query($kon, "update dosen set password = '$pas_new' where kddosen = '$_SESSION[kddosen]'");
			if($ganti){
				echo "<script>alert('Password Berhasil Diganti');window.location.href='?p=gantipass';</script>";
			}else{
				echo "<script>alert('Password Gagal Diganti');window.location.href='?p=gantipass';</script>";
			}
		}else{
			echo "<script>alert('Konfirmasi Password Berbeda');window.location.href='?p=gantipass';</script>";
		}
	}else{
		echo "<script>alert('Password Lama Salah');window.location.href='?p=gantipass';</script>";
	}
}
?>