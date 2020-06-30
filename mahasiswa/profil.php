<?php
$tampil = mysqli_query($kon, "select * from mahasiswa,jurusan where mahasiswa.kdjurusan = jurusan.kdjurusan and mahasiswa.nobp = '$_SESSION[nobp]'");
$data = mysqli_fetch_array($tampil);

if(! empty($_POST['foto'])) { $foto = "../foto/mahasiswa/$data[foto]"; } else { $foto = "../foto/avatar/img.jpg"; }
?>
<h2 align="center">Profil Mahasiswa</h2>
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
		<td><strong>TEMPAT & TGL LAHIR</strong></td>
		<td><strong>:</strong></td>
		<td><?php echo $data['tmptgllahir'];?></td>
	</tr>
	<tr>
		<td><strong>JURUSAN</strong></td>
		<td><strong>:</strong></td>
		<td><?php echo $data['nmjurusan'];?></td>
	</tr>
	<tr>
		<td valign="top"><strong>FOTO</strong></td>
		<td valign="top"><strong>:</strong></td>
		<td><img src="<?php echo $foto;?>" width="150px"></td>
	</tr>
	<tr>
		<td><strong>PASSWORD</strong></td>
		<td><strong>:</strong></td>
		<td><i><?php echo $data['password'];?></i></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td><a href="?p=gantipass" class="btn btn-edit">Ganti password</a></td>
	</tr>


</table>
</fieldset>