<?php
// Riwayat Judul Pertama
$tampil = mysqli_query($kon, "select * from skripsi,mahasiswa where skripsi.nobp = mahasiswa.nobp and mahasiswa.nobp = '$_SESSION[nobp]' and skripsi.judulke=1")or die (error);

if(mysqli_num_rows($tampil) > 0) {

$data = mysqli_fetch_array($tampil);
if($data['status'] == '') {
	$status = "<h2 style='color: #000000'>BELUM DIPERIKSA</h2>";
} else if($data['status'] == 'acc') {
	$status = "<h2 style='color: #18ff00'>DITERIMA</h2>";
} else if($data['status'] == 'tolak') {
	$status = "<h2 style='color: #ff0006'>DITOLAK</h2>";
}
?>

<center>
<h1>Judul 1</h1>
<fieldset id="berita">
<p>
	<big>JUDUL</big><br>
	<?php echo $data['judulskripsi'];?>
</p>
<p>
	<big>TEMA</big><br>
	<?php echo $data['temaskripsi'];?>
</p>
<p>
	<big>OBJEK</big><br>
	<?php echo $data['objekskripsi'];?>
</p>
<p>
	<big>LATAR BELAKANG</big><br>
	<?php echo $data['ltrbelakangskripsi'];?>
</p>
<p>
	<big>TANGGAL DIAJUKAN</big><br>
	<?php echo $data['tgldiajukan'];?>
</p>
<p>
	<big>TANGGAL DIPERIKSA</big><br>
	<?php echo $data['tglditerima'];?>
</p>
<p>
	<?php echo $status ?>
	<?php echo $data['komentar'];?>
</p>
</fieldset>
</center>

<?php } else {
			echo "";
}

?>

<br>

<?php
// Riwayat Judul kedua
$tampil2 = mysqli_query($kon, "select * from skripsi,mahasiswa where skripsi.nobp = mahasiswa.nobp and mahasiswa.nobp = '$_SESSION[nobp]' and skripsi.judulke=2")or die (error);

if(mysqli_num_rows($tampil2) > 0) {

$data2 = mysqli_fetch_array($tampil2);
if($data2['status'] == '') {
	$status = "<h2 style='color: #000000'>BELUM DIPERIKSA</h2>";
} else if($data2['status'] == 'acc') {
	$status = "<h2 style='color: #18ff00'>DITERIMA</h2>";
} else if($data2['status'] == 'tolak') {
	$status = "<h2 style='color: #ff0006'>DITOLAK</h2>";
}
?>

<center>
<h1>Judul 2</h1>
<fieldset id="berita">
<p>
	<big>JUDUL</big><br>
	<?php echo $data2['judulskripsi'];?>
</p>
<p>
	<big>TEMA</big><br>
	<?php echo $data2['temaskripsi'];?>
</p>
<p>
	<big>OBJEK</big><br>
	<?php echo $data2['objekskripsi'];?>
</p>
<p>
	<big>LATAR BELAKANG</big><br>
	<?php echo $data2['ltrbelakangskripsi'];?>
</p>
<p>
	<big>TANGGAL DIAJUKAN</big><br>
	<?php echo $data2['tgldiajukan'];?>
</p>
<p>
	<big>TANGGAL DIPERIKSA</big><br>
	<?php echo $data2['tglditerima'];?>
</p>
<p>
	<?php echo $status ?>
	<?php echo $data2['komentar'];?>
</p>
</fieldset>
</center>

<?php } else {
			echo "";
}

?>

<br>
<?php
// Riwayat Judul Tiga
$tampil3 = mysqli_query($kon, "select * from skripsi,mahasiswa where skripsi.nobp = mahasiswa.nobp and mahasiswa.nobp = '$_SESSION[nobp]' and skripsi.judulke=3")or die (error);

if(mysqli_num_rows($tampil3) > 0) {

$data3 = mysqli_fetch_array($tampil3);
if($data3['status'] == '') {
	$status = "<h2 style='color: #000000'>BELUM DIPERIKSA</h2>";
} else if($data3['status'] == 'acc') {
	$status = "<h2 style='color: #18ff00'>DITERIMA</h2>";
} else if($data3['status'] == 'tolak') {
	$status = "<h2 style='color: #ff0006'>DITOLAK</h2>";
}
?>

<center>
<h1>Judul 3</h1>
<fieldset id="berita">
<p>
	<big>JUDUL</big><br>
	<?php echo $data3['judulskripsi'];?>
</p>
<p>
	<big>TEMA</big><br>
	<?php echo $data3['temaskripsi'];?>
</p>
<p>
	<big>OBJEK</big><br>
	<?php echo $data3['objekskripsi'];?>
</p>
<p>
	<big>LATAR BELAKANG</big><br>
	<?php echo $data3['ltrbelakangskripsi'];?>
</p>
<p>
	<big>TANGGAL DIAJUKAN</big><br>
	<?php echo $data3['tgldiajukan'];?>
</p>
<p>
	<big>TANGGAL DIPERIKSA</big><br>
	<?php echo $data3['tglditerima'];?>
</p>
<p>
	<?php echo $status ?>
	<?php echo $data3['komentar'];?>
</p>
</fieldset>
</center>

<?php } else {
			echo "";
}

?>