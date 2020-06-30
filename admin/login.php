<title>SISTEM INFORMASI AKADEMIK</title>
<link rel="stylesheet" type="text/css" href="style.css">
<div id="login">
<fieldset>
<h3 align="center">LOGIN ADMINISTRATOR</h3>
<form method="POST" action="">
  <p>
    <input type="text" name="username" placeholder="Username" style="text-align: center">
  </p>
  <p>
    <input type="password" name="password" placeholder="Password" style="text-align: center">
  </p>
  <p>
     <div align="center"><input type="submit" name="login" value="LOGIN ADMINISTRATOR"></div>
  </p>

</form>
<?php
include "../config/koneksi.php";
if(isset($_POST["login"])){
  $cek = mysqli_query($kon, "select * from admin where username = '$_POST[username]' and password = '$_POST[password]'");
  $data = mysqli_fetch_array($cek);

  if(mysqli_num_rows($cek) > 0) {
    session_start();
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];
    echo "<div align='center' style='color:#007EBB'>Login Berhasil</div>";
  }else{
    echo "<div align='center' style='color:#FF0000'>Login Gagal</div>";
  }

   echo "<META HTTP-EQUIV='Refresh' Content='1; url=index.php'>";
}
?>
</fieldset>
</div>