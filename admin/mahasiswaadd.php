<h2>Tambah Mahasiswa</h2>
<form method="post" action="" enctype="multipart/form-data">
	<p>
		<input type="text" name="nobp" placeholder="Nobp">
	</p>
	<p>
		<input type="text" name="nama" placeholder="Nama">
	</p>
	<p>
		<input type="text" name="tmptgllahir" placeholder="Tempat & Tgl Lahir ( dd - mm - yyyy )"> 
	</p>
	<p>
		<select name="kdjurusan">
			<option value="">Pilih Jurusan</option>
	<?php
		$tampil = mysqli_query($kon, "select * from jurusan");
		while($data = mysqli_fetch_array($tampil)) { ?>
			<option value="<?php echo $data['kdjurusan'];?>"><?php echo $data['nmjurusan'];?></option>

	<?php } ?>
		</select>
	</p>
	<p>
		<input type="file" name="foto">
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
	$nobp         = $_POST['nobp'];
	$nama         = $_POST['nama'];
	$tmptgllahir  = $_POST['tmptgllahir'];
	$kdjurusan    = $_POST['kdjurusan'];
	$password     = $_POST['password'];

	$nmfoto  = $_FILES['foto']['name'];
	$lokfoto = $_FILES['foto']['tmp_name'];

	$tujuan = "../foto/mahasiswa/$nmfoto";

	if(is_uploaded_file($lokfoto)){
		move_uploaded_file($lokfoto, $tujuan);
	} 

	$simpan = mysqli_query($kon, "insert into mahasiswa(nobp,nama,tmptgllahir,kdjurusan,foto,password) value ('$nobp','$nama','$tmptgllahir','$kdjurusan','$nmfoto','$password')");
	if($simpan){
		echo "<script>alert('Berhasil');window.location.href='?p=mahasiswa'</script>";
	}else{
		echo "<script>alert('Gagal');window.location.href='?p=mahasiswa'</script>";

	}
}
?>
