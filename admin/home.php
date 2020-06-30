<?php
$tampil = mysqli_query($kon, "select * from admin where username = '$_SESSION[username]'");
$data = mysqli_fetch_array($tampil);
?>
<fieldset id="berita">
<div class="dh5">
	<h3>Selamat Datang Dihalaman Administrator  |</h3>
</div>
<div class="dh7">
	<h3><div style="color:#FF6600"><?php echo $data['namalengkap'];?></div></h3>
</div>
</fieldset> 