<form method="POST" action="">
		<select name="kdjurusan">
			<option value="">Pilih Jurusan</option>
			<?php 
				$tampil = mysqli_query($kon, "select * from jurusan") or die(error);
				while($data = mysqli_fetch_array($tampil)){
					echo "<option value='$data[kdjurusan]'>$data[nmjurusan]</option>";
				}
			?>
		</select>
		<input type="submit" name="cari" value="Preview">
</form>
<table>
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Jurusan</th>
		<th>Judul</th>
		<th>Aksi</th>
	</tr>
	<?php
	$no = 1;
	if(isset($_POST['cari'])){
		$kdjurusan = $_POST['kdjurusan'];
		$jurusan = "and mahasiswa.kdjurusan like '$kdjurusan'";
	}else{
		$jurusan = "";
	}

	$tampil2 = mysqli_query($kon, "select * from skripsi,mahasiswa,jurusan where skripsi.nobp = mahasiswa.nobp $jurusan and mahasiswa.kdjurusan = jurusan.kdjurusan and skripsi.status = ''") or die(error);
	while ($data2 = mysqli_fetch_array($tampil2)) { ?>
		<tr>
			<td><?php echo $no++?></td>
			<td><?php echo $data2['nama'];?></td>
			<td><?php echo $data2['nmjurusan'];?></td>
			<td><?php echo $data2['judulskripsi'];?></td>
			<td><a href="?p=skripsidtl&idskripsi=<?php echo $data2['idskripsi'];?>" class="btn btn-edit" target="_blank">Detail</a></td>
		</tr>
	<?php } ?>
</table>