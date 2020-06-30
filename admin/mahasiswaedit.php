<?php
$tampil = mysqli_query($kon, "select * from mahasiswa,jurusan where mahasiswa.kdjurusan = jurusan.kdjurusan and mahasiswa.nobp = '$_GET[nobp]'");
$data = mysqli_fetch_array($tampil);
if(!empty($data['foto'])) {
	$foto = "../foto/mahasiswa/$data[foto]";
} else {
	$foto = "../foto/avatar/img.jpg";
}
?>
<h2>Ubah Mahasiswa</h2>
<form method="post" action="" enctype="multipart/form-data">
	<p>
		<input type="text" name="nobp" placeholder="Nobp" value="<?php echo $data['nobp']?>">
	</p>
	<p>
		<input type="text" name="nama" placeholder="Nama"  value="<?php echo $data['nama']?>">
	</p>
	<p>
		<input type="text" name="tmptgllahir" placeholder="Tempat & Tgl Lahir ( yyyy - mm - dd )"  value="<?php echo $data['tmptgllahir']?>"> 
	</p>
	<p>
		<select name="kdjurusan">
			<option value="<?php echo $data['kdjurusan']?>"><?php echo $data['nmjurusan']?></option>
	<?php
		$tampil2 = mysqli_query($kon, "select * from jurusan where kdjurusan <> '$data[kdjurusan]'");
		while($data2 = mysqli_fetch_array($tampil2)) { ?>
			<option value="<?php echo $data2['kdjurusan'];?>"><?php echo $data2['nmjurusan'];?></option>

	<?php } ?>
		</select>
	</p>
	<p>
		<img src="<?php echo $foto;?>" width="200px">
	</p>
	<p>
		<input type="file" name="foto">
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
	$nobp         = $_POST['nobp'];
	$nama         = $_POST['nama'];
	$tmptgllahir  = $_POST['tmptgllahir'];
	$kdjurusan    = $_POST['kdjurusan'];
	$password     = $_POST['password'];

	$nmfoto  = $_FILES['foto']['name'];
	$lokfoto = $_FILES['foto']['tmp_name'];

	$tujuan = "../foto/mahasiswa/$nmfoto";

	if(!empty($lokfoto)) {
		$q = ", foto = '$nmfoto'";
		move_uploaded_file($lokfoto, $tujuan);
	} else {
		$q = "";
	}

	$simpan = mysqli_query($kon, "update mahasiswa set nobp = '$nobp', nama = '$nama', tmptgllahir = '$tmptgllahir' $q, kdjurusan = '$kdjurusan', password = '$password' where nobp = '$_GET[nobp]'");
	if($simpan){
		echo "<script>alert('Berhasil');window.location.href='?p=mahasiswa'</script>";
	}else{
		echo "<script>alert('Gagal');window.location.href='?p=mahasiswa'</script>";

	}
}
?>
