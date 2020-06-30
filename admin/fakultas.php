<a href="?p=fakultasadd"><button class="btn btn-add">Tambah Fakultas</button></a><p>
<table>
	<tr>
		<th>No</th>
		<th>Kode Fakultas</th>
		<th>Nama Fakultas</th>
		<th>Aksi</th>
	</tr>
	<?php
	$no = 1;
	$tampil = mysqli_query($kon, "select * from fakultas");
	while($data = mysqli_fetch_array($tampil)) { ?>
		<tr>
			<td><?php echo $no++;?></td>
			<td><?php echo $data['kdfakultas'];?></td>
			<td><?php echo $data['nmfakultas'];?></td>
			<td>
				<a href="?p=fakultasedit&kdfakultas=<?php echo $data['kdfakultas'];?>"><button class="btn btn-edit">ubah</button></a>
				<a href="?p=fakultas&del&kdfakultas=<?php echo $data['kdfakultas'];?>"><button class="btn btn-del">hapus</button></a>
			</td>
		</tr>
		
	<?php } ?>
	<tr>
	</tr>
</table>

<?php
if(isset($_GET["del"])){
	$hapus = mysqli_query($kon, "delete from fakultas where kdfakultas = '$_GET[kdfakultas]'");

	if($hapus){
		echo "<script>alert('Berhasil');window.location.href='?p=fakultas'</script>";
	}else{
		echo "<script>alert('Gagal');window.location.href='?p=fakultas'</script>";
	}
}
?>