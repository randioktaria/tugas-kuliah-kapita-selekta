<?php
$tampil = mysqli_query($kon, "select * from berita order by tglpost desc");
while($data = mysqli_fetch_array($tampil)){ 
		$hdr = substr($data['header'],0,140);
?>
<div class="dh6">
	<fieldset id="berita">
		<div class="dh12">
			<b style="color: #FF6600"><?php echo $data['judulberita'];?></b><br>
			<small><b><?php echo $data['tglpost'];?></b> WIB</small><p>
		</div>
		<div class="dh5">
			<img src="foto/berita/<?php echo $data['foto']?>" width='100%'>
		</div>
		<div class="dh7" style="text-align: justify;">
			<?php echo $hdr;?>...<br>
			<a href="?p=bacaberita&idberita=<?php echo $data['idberita'];?>">Baca Selengkapnya &raquo;</a>
		</div>
	</fieldset>
</div>
<?php } ?>