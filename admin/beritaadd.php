<h2>Tambah Berita</h2>
<form method="post" action="" enctype="multipart/form-data">
	<p>
		<input type="text" name="judulberita" placeholder="Isi Berita">
	</p>
	<p>
		<textarea name="header" placeholder="Header Berita" rows="7"></textarea>
	</p>
	<p>
		<textarea name="isiberita" placeholder="Isi Berita" rows="10"></textarea>
	</p>
	<p>
		<input type="file" name="foto">
	</p>
	<p>
		<input type="submit" name="simpan" value="SIMPAN">
	</p>
</form>
<?php
if(isset($_POST['simpan'])) {
	$judulberita = $_POST['judulberita'];
	$header      = nl2br($_POST['header']) ;
	$isiberita   = nl2br($_POST['isiberita']);

	$nmfoto = $_FILES['foto']['name'];
	$lokfoto = $_FILES['foto']['tmp_name'];

	$tujuan = "../foto/berita/$nmfoto";

	if(is_uploaded_file($lokfoto)) {
		move_uploaded_file($lokfoto, $tujuan);
	}

	$simpan = mysqli_query($kon, "insert into berita(judulberita,header, isiberita, foto, tglpost) value ('$judulberita','$header','$isiberita','$nmfoto', NOW())");

	if($simpan) {
		echo "<script>alert('Berhasil');window.location.href='?p=berita'</script>";
	} else {
		echo "<script>alert('Gagal');window.location.href='?p=berita'</script>";
	}
}
?>
