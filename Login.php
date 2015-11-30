<?php
  include('template/header.php');
  include 'template/sidebar.php';
  session_start();
?>
		<div class="container" align="center">
			<h2 align="center"><u>Form Login</h2>
			<form role="form" class="form-horizontal" action="" method="post">
				<table align="center" class="table">
					<tr>
						<td>Username</td>
						<td>:</td>
						<td><input type="text" class="form-control" name="Username" placeholder="Masukan Username"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td>:</td>
						<td><input type="password" class="form-control" name="pw" placeholder="password"></td>
					</tr>
					<tr>
						<td colspan="3" align="center"><button type="submit" name="login" class="btn btn-primary">Login</button></td>
					</tr>
				</table>		
			</form>
		</div>

		<?php 
		if(isset($_POST['login']))
		{
			include"koneksi.php";
			$Username=$_POST['Username'];
			$Password=$_POST['pw'];
				$insert="select * from user where Username='$Username' and Password='$Password'";

				
				$insert_query = mysql_query($insert);

				if(mysql_num_rows($insert_query)>0)
				{	
					$query=mysql_query("SELECT * FROM user WHERE Username='$id'");
					$row=mysql_fetch_array($query);
					$role=$row['id_role'];
					if ($role = 1 ) {
								echo "
							<script>
							alert('Kamu Berhasil Login');
							window.location = 'admin.php';
							</script>
							";
							}
					else
					{
						echo "
						<script>
							alert('Kamu Berhasil Login');
							window.location = 'index.php';
							</script>";
					}

											
				}
				else{
					echo "<div class='alert alert-danger' role=alert><h3>Username Password Salah</h3></div>";
				}
		}
	include('template/footer.php');
	?>
	</body>

</html>