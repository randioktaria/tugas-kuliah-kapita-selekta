<p>
<a href="?p=beritaadd" class="btn btn-add">Tambah Berita</a>

<br><br>

<?php 
$tampil = mysqli_query($kon, "select * from berita order by tglpost desc");

while ($data = mysqli_fetch_array($tampil)) { ?>
	<fieldset id="berita">
		<div class="dh12" style="text-align: justify;">
			<div class="dh3">
				<img src="../foto/berita/<?php echo $data['foto'];?>" width="95%">
			</div>
			<div class="dh9">
				<small><?php echo $data['tglpost'];?></small>
				<h3><?php echo $data['judulberita'];?></h3>
				<?php echo $data['header'];?>
				<br>
				<a href="?p=bacaberita&idberita=<?php echo $data['idberita'];?>">Baca Selengkapnya &raquo;</a>
			</div>
		</div>
	</fieldset>

<?php } ?>

