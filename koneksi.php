
<?php
$host = "ap-cdbr-azure-southeast-a.cloudapp.net";
$user = "b6a18f25b309d1";
$pass = "bd9a8d78";
$db = "rezidb";
$konek = mysql_connect($host, $user, $pass) or die ('Koneksi Gagal! ');
mysql_select_db($db);
?>
