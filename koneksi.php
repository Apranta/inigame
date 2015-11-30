<?php
$host = "lbr-cdbr-azure-south-a.cloudapp.net";
$user = "b67515a75fa4a1";
$pass = "2ce8a2bf";
$db = "tubes";
$konek = mysql_connect($host, $user, $pass) or die ('Koneksi Gagal! ');
mysql_select_db($db);
?>
