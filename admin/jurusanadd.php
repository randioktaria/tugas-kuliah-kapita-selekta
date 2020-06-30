<h2>Tambah Jurusan</h2>
<form method="post" action="">
	<p>
		<select name="kdfakultas">
			<option value="">Pilih Fakultas</option>
			<?php
				$tampil = mysqli_query($kon, "select * from fakultas");
				while($data = mysqli_fetch_array($tampil)){
					echo "<option value='$data[kdfakultas]'>$data[nmfakultas]</option>";
				} 
			 ?>
		</select>
	</p>
	<p>
		<input type="text" name="kdjurusan" placeholder="Kode Jurusan">
	</p>
	<p>
		<input type="text" name="nmjurusan" placeholder="Nama Jurusan">
	</p>
	<p>
		<input type="submit" name="simpan" value="SIMPAN">
	</p>
</form>
<?php
if(isset($_POST['simpan'])) {
	$kdfakultas = $_POST['kdfakultas'];
	$kdjurusan  = $_POST['kdjurusan'];
	$nmfakultas = $_POST['nmjurusan'];

	$simpan = mysqli_query($kon, "insert into jurusan(kdjurusan,nmjurusan,kdfakultas) value ('$kdjurusan','$nmjurusan','$kdfakultas')");
	if($simpan){
		echo "<script>alert('Berhasil');window.location.href='?p=jurusan'</script>";
	}else{
		echo "<script>alert('Gagal');window.location.href='?p=jurusan'</script>";

	}
}
?>
