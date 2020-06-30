<?php
$tampil = mysqli_query($kon, "select * from jurusan,fakultas where fakultas.kdfakultas = jurusan.kdfakultas and jurusan.kdjurusan = '$_GET[kdjurusan]'")or die (error);
$data = mysqli_fetch_array($tampil);
?>
<h3>Tambah Jurusan</h3>
<form method="post" action="">
	<p>
		<select name="kdfakultas">
			<option value="<?php echo $data['kdfakultas'];?>"><?php echo $data['nmfakultas'];?></option>
			<?php
				$tampil2 = mysqli_query($kon, "select * from fakultas where kdfakultas <> '$data[kdfakultas]'")
			?>
		</select>
	</p>
	<p>
		<input type="text" name="kdjurusan" placeholder="Kode Jurusan" value="<?php echo $data['kdjurusan']?>">
	</p>
	<p>
		<input type="text" name="nmjurusan" placeholder="Nama Jurusan" value="<?php echo $data['nmjurusan']?>">
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

	$simpan = mysqli_query($kon, "update jurusan set kdjurusan = '$kdjurusan', nmjurusan = '$nmjurusan', kdfakultas = '$kdfakultas' where kdjurusan = '$_GET[kdjurusan]'");
	if($simpan){
		echo "<script>alert('Berhasil');window.location.href='?p=jurusan'</script>";
	}else{
		echo "<script>alert('Gagal');window.location.href='?p=jurusan'</script>";

	}
}
?>
