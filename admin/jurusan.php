<a href="?p=jurusanadd"><button class="btn btn-add">Tambah Jurusan</button></a><p>
<table>
	<tr>
		<th>No</th>
		<th>Kode Jurusan</th>
		<th>Nama Jurusan</th>
		<th>Aksi</th>
	</tr>
	<?php
	$no = 1;
	$tampil = mysqli_query($kon, "select * from jurusan");
	while($data = mysqli_fetch_array($tampil)) { ?>
		<tr>
			<td><?php echo $no++;?></td>
			<td><?php echo $data['kdjurusan'];?></td>
			<td><?php echo $data['nmjurusan'];?></td>
			<td>
				<a href="?p=jurusanedit&kdjurusan=<?php echo $data['kdjurusan'];?>"><button class="btn btn-edit">ubah</button></a>
				<a href="?p=jurusan&del&kdjurusan=<?php echo $data['kdjurusan'];?>"><button class="btn btn-del">hapus</button></a>
			</td>
		</tr>
		
	<?php } ?>
	<tr>
	</tr>
</table>

<?php
if(isset($_GET["del"])){
	$hapus = mysqli_query($kon, "delete from jurusan where kdjurusan = '$_GET[kdjurusan]'");

	if($hapus){
		echo "<script>alert('Berhasil');window.location.href='?p=jurusan'</script>";
	}else{
		echo "<script>alert('Gagal');window.location.href='?p=jurusan'</script>";
	}
}
?>