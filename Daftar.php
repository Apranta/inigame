<?php
  include 'template/header.php';
  include 'template/sidebar.php';
?>
<div class="container">
		<form role="form" class="form-horizontal" action="" method="post">
			<h2 align="center"><u>Form Daftar</h3>
			<table class="table table-striped" align="center">
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" class="form-control" name="Nama" placeholder="Masukan Nama anda" width="100"></td>
			</tr>
			<tr>
				<td colspan="3" align="center">
				<select name="gender">
					<option value="1" class="form-control">Laki Laki
					<option value="2" class="form-control">Perempuan
				</select>
				</td>
			</tr>
				<tr>
					<td>Username </td><td>:</td>
					<td><input type="text" class="form-control" name="Username" placeholder="Masukan Username" width="100"></td>
				</tr>
				<tr>
					<td>Password</td><td>:</td>
					<td><input type="password" class="form-control" name="pw" placeholder="password"></td>
				</tr>
				<tr>
					<td>rePassword</td><td>:</td>
					<td><input type="password" class="form-control" name="repw" placeholder="repassword"></td>
				</tr>
				<tr>
				<td align="center" colspan="3"><button type="submit" class="btn btn-primary" name="kirim">Daftar</button></td>
				</tr>
			</table>
			</form>
	</div>
		<?php 
		if(isset($_POST['kirim']))
		{
			include"koneksi.php";
			$Password=$_POST['pw'];
			$repw=$_POST['repw'];
			if ($Password==$repw) {
				$Nama=$_POST['Nama'];
				$Username=$_POST['Username'];
				$gender=$_POST['gender'];
				$insert="insert into user(Nama,Username,Id_role,Password,gender) 
					values('$Nama','$Username','2','$Password','$gender')";
				$insert_query = mysql_query($insert)or die(mysql_error());
				if($insert_query)
				{	
					echo "
					<script>
					alert('Proses Penambahan Berhasil')
					</script>";				
				}
				else{
					echo "
					<script>
					alert('Proses Gagal')
					</script>";
				}
			}
			else{
				echo "<div class='alert alert-danger' role=alert>Ada Form Kosong atau password anda tidak sama</div>";
			}	 
		}
	?>
	</body>
