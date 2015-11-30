<?php 
	include "koneksi.php";
	$id=$_GET['id'];
	$query=mysql_query("delete FROM user WHERE Username='$id'");
	if($query){

		header("location: User.php");

	}
	else{
		echo "<h3>Maaf Delete Tidak sukses";
	}
?>