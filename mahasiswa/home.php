<?php
$tampil = mysqli_query($kon, "select * from mahasiswa where nobp = '$_SESSION[nobp]'");
$data = mysqli_fetch_array($tampil);
?>
<fieldset id="berita">
<div class="grid">
<div class="dh5">
	<h3>Selamat Datang Dihalaman Mahasiswa  |</h3>
</div>
<div class="dh7">
	<h3><div style="color:#FF6600"><?php echo $data['nama'];?></div></h3>
</div>
</div>
</fieldset> 


<fieldset id="berita">
<div class="grid">
	<div class="dh12">
		
		<div style="color: #ff0006"><i>Catatan :
			Judul Skripsi Hanya Boleh Diajukan Sebanyak 3 Kali, Kalau Sudah Diajukan Sebanyak 3 Kali Dan Judul Belum Diterima Silahkan Lakukan Konsultasi Dengan Dosen Yang Bersangkutan . . . !!!</i>
		</div>
	</div>
</div>
</fieldset>
