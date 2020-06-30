<a href="?p=mahasiswaadd"><button class="btn btn-add">Tambah Mahasiswa</button></a><p>
<table>
	<tr>
		<th>No</th>
		<th>Nobp</th>
		<th>Nama</th>
		<th>Tempat & Tgl Lahir</th>
		<th>Jurusan</th>
		<th>Foto</th>
		<th>Password</th>
		<th>Aksi</th>
	</tr>
	<?php
	$no = 1;
	$tampil = mysqli_query($kon, "select * from mahasiswa,jurusan where jurusan.kdjurusan = mahasiswa.kdjurusan");
	while($data = mysqli_fetch_array($tampil)) { 
		if(!empty($data['foto'])) {
			$foto = "../foto/mahasiswa/$data[foto]";
		}else {
			$foto = "../foto/avatar/img.jpg";
		}
		?>
		<tr>
			<td><?php echo $no++;?></td>
			<td><?php echo $data['nobp'];?></td>
			<td><?php echo $data['nama'];?></td>
			<td><?php echo $data['tmptgllahir'];?></td>
			<td><?php echo $data['nmjurusan'];?></td>
			<td><img src="<?php echo $foto;?>" width="100px"></td>
			<td><i><?php echo $data['password'];?></i></td>
			<td>
				<a href="?p=mahasiswaedit&nobp=<?php echo $data['nobp'];?>"><button class="btn btn-edit">ubah</button></a>
				<a href="?p=mahasiswa&del&nobp=<?php echo $data['nobp'];?>"><button class="btn btn-del">hapus</button></a>
			</td>
		</tr>
		
	<?php } ?>
	<tr>
	</tr>
</table>

<?php
if(isset($_GET["del"])){
	$hapus = mysqli_query($kon, "delete from mahasiswa where nobp = '$_GET[nobp]'");

	if($hapus){
		echo "<script>alert('Berhasil');window.location.href='?p=mahasiswa'</script>";
	}else{
		echo "<script>alert('Gagal');window.location.href='?p=mahasiswa'</script>";
	}
}
?>