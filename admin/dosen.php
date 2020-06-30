<a href="?p=dosenadd"><button class="btn btn-add">Tambah Dosen</button></a><p>
<table>
	<tr>
		<th>No</th>
		<th>Kode Dosen</th>
		<th>Nama Dosen</th>
		<th>Foto</th>
		<th>Password</th>
		<th>Aksi</th>
	</tr>
	<?php
	$no = 1;
	$tampil = mysqli_query($kon, "select * from dosen");
	while($data = mysqli_fetch_array($tampil)) { 

		if(!empty($data['fotodosen'])) { $fotodosen = "../foto/dosen/$data[fotodosen]"; } else { $fotodosen = "../foto/avatar/img.jpg"; }
		
		?>

		<tr>
			<td><?php echo $no++;?></td>
			<td><?php echo $data['kddosen'];?></td>
			<td><?php echo $data['nmdosen'];?></td>
			<td><img src="<?php echo $fotodosen;?>" width="100px"></td>
			<td><i><?php echo $data['password'];?></i></td>
			<td>
				<a href="?p=dosenedit&kddosen=<?php echo $data['kddosen'];?>"><button class="btn btn-edit">ubah</button></a>
				<a href="?p=dosen&del&kddosen=<?php echo $data['kddosen'];?>"><button class="btn btn-del">hapus</button></a>
			</td>
		</tr>
		
	<?php } ?>
	<tr>
	</tr>
</table>

<?php
if(isset($_GET["del"])){
	$hapus = mysqli_query($kon, "delete from dosen where kddosen = '$_GET[kddosen]'");

	if($hapus){
		echo "<script>alert('Berhasil');window.location.href='?p=dosen'</script>";
	}else{
		echo "<script>alert('Gagal');window.location.href='?p=dosen'</script>";
	}
}
?>