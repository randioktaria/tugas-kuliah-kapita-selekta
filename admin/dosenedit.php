<?php
$tampil = mysqli_query($kon, "select * from dosen where kddosen = '$_GET[kddosen]'");
$data = mysqli_fetch_array($tampil);

if(!empty($data['fotodosen'])) {
	$fotodosen = "../foto/dosen/$data[fotodosen]";
} else {
	$fotodosen = "../foto/avatar/img.jpg";
}
?>
<h3>Tambah Jurusan</h3>
<form method="post" action="" enctype="multipart/form-data">
	<p>
		<input type="text" name="kddosen" placeholder="Kode Dosen" value="<?php echo $data['kddosen']?>">
	</p>
	<p>
		<input type="text" name="nmdosen" placeholder="Nama Dosen" value="<?php echo $data['nmdosen']?>">
	</p>
	<p>
		<img src="<?php echo $fotodosen;?>" width="200px">
	</p>
	<p>
		<input type="file" name="fotodosen">
	</p>
	<p>
		<input type="text" name="password" placeholder="Password" value="<?php echo $data['password']?>">
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

	if(!empty($lokfoto)) {
		$q = ", fotodosen = '$nmfoto'";
		move_uploaded_file($lokfoto, $tujuan);
	} else {
		$q = "";
	}

	$simpan = mysqli_query($kon, "update dosen set kddosen = '$kddosen', nmdosen = '$nmdosen' $q, password = '$password' where kddosen = '$_GET[kddosen]'");
	if($simpan){
		echo "<script>alert('Berhasil');window.location.href='?p=dosen'</script>";
	}else{
		echo "<script>alert('Gagal');window.location.href='?p=dosen'</script>";

	}
}
?>
