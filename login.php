<style type="text/css">
body{
  font-family:"Arial";
  padding:0px;
  margin:0px;
  color:#007EBB;
  font-size:14px;
}

input[type="text"],
input[type="password"],
select{
  width:100%;
  padding:0.8em;
  margin-top:1em;
  font-family:Arial;
  font-size:14px;
  color:#007EBB;
  border:1px solid #999999;
  border-radius:4px;
  background-color:#F3F3F3;
  text-align: center;
}

option{
  padding:5px;
  text-align:center;
}

fieldset{
  margin:0px;
  border:none;
}

input[type="submit"]{
  width:100%;
  margin-top:0.9em;
  color:#FFFFFF;
  background-color:#007EBB;
  padding:0.8em;
  font-family:Arial;
  font-size:14px;
  text-align:center;
  cursor:pointer;
  border-radius:4px;
}

#login{
  max-width:350px;
  margin:100px auto;
  position:relative;
  display:block;
  background-color:#FFFFFF;
  box-shadow: 0 0 5px #aaa;
}


</style>
<title>LOGIN : SISTEM INFORMASI AKADEMIK</title>
<div id="login">
<fieldset>
<h3 align="center">LOGIN USER</h3>
<form method="POST" action="">
  <p>
    <input type="text" name="username" placeholder="Username" style="text-align: center">
  </p>
  <p>
    <input type="password" name="password" placeholder="Password" style="text-align: center">
  </p>
  <p>
    <select name="level">
      <option value="">Pilih Level</option>
      <option value="mahasiswa">Mahasiswa</option>
      <option value="dosen">Dosen</option>
    </select>
  </p>
  <p>
     <div align="center"><input type="submit" name="login" value="LOGIN"></div>
  </p>

</form>
<?php
include "config/koneksi.php";
if(isset($_POST["login"])){
  if($_POST['level'] == "mahasiswa"){
    $cek = mysqli_query($kon, "select * from mahasiswa where nobp = '$_POST[username]' and password = '$_POST[password]'");
    $data = mysqli_fetch_array($cek);

    if(mysqli_num_rows($cek) > 0) {
      session_start();
      $_SESSION['nobp']     = $data['nobp'];
      $_SESSION['password'] = $data['password'];
      echo "<div align='center' style='color:#007EBB'>Login Berhasil</div>";
      echo "<META HTTP-EQUIV='Refresh' Content='1; url=mahasiswa/index.php'>";
    }else{
      echo "<div align='center' style='color:#FF0000'>Login Gagal</div>";
      echo "<META HTTP-EQUIV='Refresh' Content='1; url=login.php'>";
    }

   } else

   if($_POST['level'] == "dosen"){
    $cek = mysqli_query($kon, "select * from dosen where kddosen = '$_POST[username]' and password = '$_POST[password]'");
    $data = mysqli_fetch_array($cek);

    if(mysqli_num_rows($cek) > 0) {
      session_start();
      $_SESSION['kddosen']  = $data['kddosen'];
      $_SESSION['password'] = $data['password'];
      echo "<div align='center' style='color:#007EBB'>Login Berhasil</div>";
      echo "<META HTTP-EQUIV='Refresh' Content='1; url=dosen/index.php'>";
    }else{
      echo "<div align='center' style='color:#FF0000'>Login Gagal</div>";
      echo "<META HTTP-EQUIV='Refresh' Content='1; url=login.php'>";
    }

     echo "<META HTTP-EQUIV='Refresh' Content='1; url=dosen/index.php'>";
   }else {
     echo "<div align='center' style='color:#FF0000'>Login Gagal</div>";
     echo "<META HTTP-EQUIV='Refresh' Content='1; url=login.php'>"; 
   }
}
?>
</fieldset>
</div>