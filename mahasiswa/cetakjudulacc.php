<?php
session_start();
include "../config/koneksi.php";

$cek = mysqli_query($kon, "select * from skripsi,mahasiswa where skripsi.nobp = mahasiswa.nobp and skripsi.status ='acc' and mahasiswa.nobp = '$_SESSION[nobp]'");
$data = mysqli_fetch_array($cek);
?>

<title>CETAK JUDUL : SISTEM INFORMASI AKADEMIK</title>
<body onload="window.print();window.closeoff()">
<h2 align="center">BUKTI JUDUL DITERIMA</h2>
<hr>
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
</body>