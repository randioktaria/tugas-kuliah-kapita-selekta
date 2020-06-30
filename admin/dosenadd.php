<h2>Tambah Dosen</h2>
<form method="post" action="" enctype="multipart/form-data">
	<p>
		<input type="text" name="kddosen" placeholder="Kode Dosen">
	</p>
	<p>
		<input type="text" name="nmdosen" placeholder="Nama Dosen">
	</p>
	<p>
		<input type="file" name="fotodosen">
	</p>
	<p>
		<input type="text" name="password" placeholder="Password">
	</p>
	<p>
		<input type="submit" name="simpan" value="SIMPAN">
	</p>
</form>
<?php
if(isset($_POST['simpan'])) {
	$kddosen   = $_POST['kddosen'];
	$nmdosen   = $_POST['nmdosen'];
	$password  = $_POST['password'];

	$nmfoto  = $_FILES['fotodosen']['name'];
	$lokfoto = $_FILES['fotodosen']['tmp_name'];

	$tujuan = "../foto/dosen/$nmfoto";

	if(is_uploaded_file($lokfoto)){
		move_uploaded_file($lokfoto, $tujuan);
	} 

	$simpan = mysqli_query($kon, "insert into dosen(kddosen,nmdosen,fotodosen,password) value ('$kddosen','$nmdosen','$nmfoto','$password')");
	if($simpan){
		echo "<script>alert('Berhasil');window.location.href='?p=dosen'</script>";
	}else{
		echo "<script>alert('Gagal');window.location.href='?p=dosen'</script>";

	}
}
?>
