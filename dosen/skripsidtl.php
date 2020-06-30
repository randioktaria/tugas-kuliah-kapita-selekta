<?php
$tampil = mysqli_query($kon, "select * from skripsi,mahasiswa,jurusan where skripsi.nobp = mahasiswa.nobp and mahasiswa.kdjurusan = jurusan.kdjurusan and skripsi.idskripsi = '$_GET[idskripsi]'")or die(error);
$data = mysqli_fetch_array($tampil);
?>
<h2 align="center">Detail Skripsi</h2>
<fieldset id="berita"> 
<table cellspacing="0">
	<tr>
		<td width="15%"><strong>NOBP</strong></td>
		<td width=""><strong>:</strong></td>
		<td width="85%"><?php echo $data['nobp'];?></td>
	</tr>
	<tr>
		<td><strong>NAMA</strong></td>
		<td><strong>:</strong></td>
		<td><?php echo $data['nama'];?></td>
	</tr>
	<tr>
		<td><strong>JURUSAN</strong></td>
		<td><strong>:</strong></td>
		<td><?php echo $data['nmjurusan'];?></td>
	</tr>
	<tr>
		<td><strong>JUDUL</strong></td>
		<td><strong>:</strong></td>
		<td><?php echo $data['judulskripsi'];?></td>
	</tr>
	<tr>
		<td><strong>TEMA</strong></td>
		<td><strong>:</strong></td>
		<td><?php echo $data['temaskripsi'];?></td>
	</tr>
	<tr>
		<td><strong>OBJEK</strong></td>
		<td><strong>:</strong></td>
		<td><?php echo $data['objekskripsi'];?></td>
	</tr>
	<tr>
		<td><strong>TANGGAL DIAJUKAN</strong></td>
		<td><strong>:</strong></td>
		<td><?php echo $data['tgldiajukan'];?></td>
	</tr>
	<tr>
		<td><strong>LATAR BELAKANG</strong></td>
		<td><strong>:</strong></td>
		<td><?php echo $data['ltrbelakangskripsi'];?></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td><a href="?p=skripsidtl&terima&idskripsi=<?php echo $data['idskripsi'];?>" class="btn btn-edit">Terima</a>
			<a href="?p=skripsidtl&tolak&idskripsi=<?php echo $data['idskripsi'];?>" class="btn btn-del">Tolak</a>
		</td>
	</tr>



</table>

<?php 
if(isset($_GET['terima'])) { ?>
	<form method="POST" action="">
		<p>
			<textarea name="komentar" placeholder="Silahkan Masukkan Komentar . . . ." rows="5"></textarea>
		</p>
		<p>
			<input type="submit" name="kirim" value="Terima & Kirim Komentar">
		</p>
	</form>
<?php 
	if($_POST['kirim']){
		$komentar = nl2br($_POST['komentar']);
		$kirim = mysqli_query($kon, "update skripsi set tglditerima = NOW(), status = 'acc', komentar = '$_POST[komentar]' where idskripsi = '$_GET[idskripsi]'");

		if($kirim) {
			echo "<script>alert('Berhasil');window.location.href='?p=skripsidiajukan'</script>";
		}else {
			echo "<script>alert('Gagal');window.location.href='?p=skripsidiajukan'</script>";

		}
	}
} 

?>


<?php
if(isset($_GET['tolak'])) { ?>
	<form method="POST" action="">
		<p>
			<textarea name="komentar" placeholder="Silahkan Masukkan Komentar . . . ." rows="5"></textarea>
		</p>
		<p>
			<input type="submit" name="kirim" value="Tolak & Kirim Komentar">
		</p>
	</form>
<?php
if($_POST['kirim']){
		$komentar = nl2br($_POST['komentar']);
		$kirim = mysqli_query($kon, "update skripsi set tglditerima = NOW(), status = 'tolak', komentar = '$_POST[komentar]' where idskripsi = '$_GET[idskripsi]'");

		if($kirim) {
			echo "<script>alert('Berhasil');window.location.href='?p=skripsidiajukan'</script>";
		}else {
			echo "<script>alert('Gagal');window.location.href='?p=skripsidiajukan'</script>";

		}
	}
 } 
 ?>
</fieldset>