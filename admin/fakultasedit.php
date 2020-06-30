<?php
$tampil = mysqli_query($kon, "select * from fakultas where kdfakultas = '$_GET[kdfakultas]'");
$data = mysqli_fetch_array($tampil);
?>
<h3>Tambah Fakultas</h3>
<form method="post" action="">
	<p>
		<input type="text" name="kdfakultas" value="<?php echo $data['kdfakultas'];?>">
	</p>
	<p>
		<input type="text" name="nmfakultas"  value="<?php echo $data['nmfakultas'];?>">
	</p>
	<p>
		<input type="submit" name="simpan" value="SIMPAN">
	</p>
</form>
<?php
if(isset($_POST['simpan'])) {
	$kdfakultas = $_POST['kdfakultas'];
	$nmfakultas = $_POST['nmfakultas'];

	$simpan = mysqli_query($kon, "update fakultas set kdfakultas = '$kdfakultas', nmfakultas = '$nmfakultas' where kdfakultas = '$_GET[kdfakultas]'");
	if($simpan){
		echo "<script>alert('Berhasil');window.location.href='?p=fakultas'</script>";
	}else{
		echo "<script>alert('Gagal');window.location.href='?p=fakultas'</script>";

	}
}
?>
