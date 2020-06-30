<?php
$tampil = mysqli_query($kon, "select * from mahasiswa where nobp = '$_SESSION[nobp]'");
$data = mysqli_fetch_array($tampil);

$cekjdlacc = mysqli_query($kon, "select * from skripsi where nobp = '$_SESSION[nobp]' and status = 'acc'");
if(mysqli_num_rows($cekjdlacc) > 0) {
	echo "<fieldset id='berita'><h4><div style='color: #ff0006'>Halaman Tidak Bisa Diakses Judul Telah Diterima</div></h4></fieldset>";
}else {

$cek = mysqli_query($kon, "select * from skripsi where nobp = '$_SESSION[nobp]'");
$row = mysqli_num_rows($cek);

if($row == 0) { $judulke = 1; } else if($row == 1) { $judulke = 2; } else if($row == 2) { $judulke = 3; }

if($row == 3) {
	echo "<fieldset id='berita'><h4><div style='color: #ff0006'>Halaman Tidak Bisa Diakses Anda Sudah Megajukan 3 Judul</div></h4></fieldset>";
}else{


$cekjdl = mysqli_query($kon, "select * from skripsi where nobp = '$_SESSION[nobp]' and status = ''");
if(mysqli_num_rows($cekjdl)){
	echo "<fieldset id='berita'><h4><div style='color: #ff0006'>Silahkan Lihat Judul Yang Telah Diajukan Dihalam Riwayat Pengajuan</div></h4></fieldset>";
}else{



?>
<h3>Form Pengajuan Judul Skripsi | Judul Ke <?php echo "$judulke";?></h3>
<form method="POST" action="">
<p>
	<input type="text" name="nobp" value="<?php echo $data['nobp'];?> | <?php echo $data['nama'];?>" readonly>
</p>
<p>
	<textarea name="judulskripsi" placeholder="Judul"></textarea>
</p>
<p>
	<textarea name="temaskripsi" placeholder="Tema"></textarea>
</p>
<p>
	<textarea name="objekskripsi" placeholder="Objek"></textarea>
</p>
<p>
	<textarea name="ltrbelakangskripsi" placeholder="Latar Belakang" rows="8"></textarea>
</p>
<p>
	<input type="text" name="judulke" value="$judulke" hidden>
</p>
<p>
	<input type="submit" name="ajukan" value="AJUKAN JUDUL">
</p>
</form>

<?php
if(isset($_POST['ajukan'])) {
	$nobp               = $data['nobp'];
	
	$judulskripsi       = $_POST['judulskripsi'];
	$temaskripsi        = $_POST['temaskripsi'];
	$objekskripsi       = $_POST['objekskripsi'];
	$ltrbelakangskripsi = nl2br($_POST['ltrbelakangskripsi']);

	$ajukan = mysqli_query($kon, "insert into skripsi(nobp,judulskripsi,temaskripsi,objekskripsi,ltrbelakangskripsi,tgldiajukan,judulke) value ('$nobp','$judulskripsi','$temaskripsi','$objekskripsi','$ltrbelakangskripsi',NOW(),$judulke)");

	if($ajukan){
		echo "<script>alert('Berhasil');window.location.href='?p=pengajuanskripsi'</script>";
	} else {
		echo "<script>alert('Gagal');window.location.href='?p=pengajuanskripsi'</script>";
	}
}
}
}
}
?>