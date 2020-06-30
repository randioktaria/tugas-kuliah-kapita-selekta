<?php
$cek = mysqli_query($kon, "select * from skripsi,mahasiswa where skripsi.nobp = mahasiswa.nobp and skripsi.status ='acc' and mahasiswa.nobp = '$_SESSION[nobp]'");
if(mysqli_num_rows($cek) == 0) {
	echo "<fieldset id='berita'><h4><div style='color: #ff0006'>Halaman Tidak Bisa Diakses Judul Belum Diterima</div></h4></fieldset>";
} else {
$data = mysqli_fetch_array($cek);
?>

<a href="cetakjudulacc.php" target="_blank"><button class="btn btn-edit">Cetak</button></a>
<fieldset id="berita">
<h2 align="center">BUKTI JUDUL DITERIMA</h2>
<p>
	<big>NOBP</big><br>
	<?php echo $data['nobp'];?>
</p>
<p>
	<big>Nama</big><br>
	<?php echo $data['nama'];?>
</p>
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
	<big>TANGGAL DITERIMA</big><br>
	<?php echo $data['tglditerima'];?>
</p>
</fieldset>
<?php } ?>