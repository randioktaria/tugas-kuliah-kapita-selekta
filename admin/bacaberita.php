<?php
$tampil = mysqli_query($kon, "select * from berita where idberita = '$_GET[idberita]'");
$data = mysqli_fetch_array($tampil);
?>
<div class="dh12">
	<fieldset id="berita">
		<h3 style="color: #FF6600"><?php echo $data['judulberita'];?></h3>
		<small><b><?php echo $data['tglpost'];?></b> WIB</small>
		<p><img src="../foto/berita/<?php echo $data['foto']?>" width="100%"></p>
		<p><?php echo $data['isiberita']?></p>
	</fieldset>
</div>