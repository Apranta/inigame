<?php 
	include "koneksi.php";
	$id=$_GET['id'];
	$query=mysql_query("SELECT * FROM user WHERE Username='$id'");
	$row=mysql_fetch_array($query);
?>

<html>
<head>
	<title>Edit User</title>
		<link type="text/css" rel="stylesheet" href="asset/css/bootstrap.min.css"/>
</head>
	<div class="container">
		<h1>Edit User</h1>
		<form action="" method="post">
			<input type="hidden" name="user" value="<?=$row['user']?>" >
			<table class="table">
				<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" class="form-control" name="Nama" value=<?=$row['Nama']?>></td>
			</tr>
			<tr>
				<td colspan="3" align="center">
				<input type="checkbox" name="gender" value=<?=$row['gender']?>>Laki Laki
				<input type="checkbox" name="gender" value=<?=$row['gender']?>> Perempuan
				</td>
			</tr>
				<tr>
					<td>Username </td><td>:</td>
					<td><input type="text" class="form-control" name="Username" value=<?=$row['Username']?>></td>
				</tr>
				<tr>
					<td>Password</td><td>:</td>
					<td><input type="password" class="form-control" name="pw" value=<?=$row['Password']?> ></td>
				</tr>
				<tr>
					<td>Password</td><td>:</td>
					<td><input type="password" class="form-control" name="repw" value=<?=$row['Password']?> ></td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" name="update" value="Edit" class="btn btn-lg btn-primary">
					</td>
				</tr>
			</table>
		</form>
	</div>
	<?php 
		if(isset($_POST['update']))
		{
			include"koneksi.php";
			$Nama=$_POST['Nama'];
			$Username=$_POST['Username'];
			$Password=$_POST['pw'];
			$gender=$_POST['gender'];
			$edit="UPDATE user SET Nama='$Nama', Username='$Username',
				Password='$Password',gender='$gender' WHERE Username='$Username'";
			$edit_query = mysql_query($edit)or die(mysql_error());
			if($edit_query)
			{	
				echo "
				<script>
				alert('berhasil');
				window.location = 'admin.php';
				</script>";					
			}
			else{
				echo "Proses edit Gagal";
			}
		}
	?>
</body>
</html>