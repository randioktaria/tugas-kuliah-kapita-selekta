<?php
$tampil = mysqli_query($kon, "select * from dosen where kddosen = '$_SESSION[kddosen]'")or die(error);
$data = mysqli_fetch_array($tampil);
?>
<fieldset id="berita">
<div class="dh5">
	<h3>Selamat Datang Dihalaman Dosen  |</h3>
</div>
<div class="dh7">
	<h3><div style="color:#FF6600"><?php echo $data['nmdosen'];?></div></h3>
</div>
</fieldset> 