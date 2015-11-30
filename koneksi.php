<?php
$host = "br-cdbr-azure-south-a.cloudapp.net";
$user = "b67515a75fa4a1";
$pass = "bd9a8d78";
$db = "rezidb";
$konek = mysql_connect($host, $user, $pass) or die ('Koneksi Gagal! ');
mysql_select_db($db);
?>
