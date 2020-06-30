<h2>Tambah Fakultas</h2>
<form method="post" action="">
	<p>
		<input type="text" name="kdfakultas" placeholder="Kode Fakultas">
	</p>
	<p>
		<input type="text" name="nmfakultas" placeholder="Nama Fakultas">
	</p>
	<p>
		<input type="submit" name="simpan" value="SIMPAN">
	</p>
</form>
<?php
if(isset($_POST['simpan'])) {
	$kdfakultas = $_POST['kdfakultas'];
	$nmfakultas = $_POST['nmfakultas'];

	$simpan = mysqli_query($kon, "insert into fakultas(kdfakultas,nmfakultas) value ('$kdfakultas','$nmfakultas')");
	if($simpan){
		echo "<script>alert('Berhasil');window.location.href='?p=fakultas'</script>";
	}else{
		echo "<script>alert('Gagal');window.location.href='?p=fakultas'</script>";

	}
}
?>
