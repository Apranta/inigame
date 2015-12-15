<?php
	include 'template/header.php';
	if (!session_start()) {
		echo "<script>
			window.location = 'login.php';
		</script>";
	}

	else{
		echo "<div class='col-md-3 sidebar'>
			<div>
				<ul class='nav nav-pills nav-stacked '>
			 		<li><a href='admin.php?page=Daftar' class='btn btn-block'>Tambah User</a></li>
					<li><a href='admin.php?page=User' class='btn btn-block'>Daftar User</a></li>
			 		<li><a href='admin.php?page=tambah_game' class='btn btn-block'>Tambah Game</a></li>
				</ul>
			</div>
		</div>
		<div class='col-md-9'>";
					if (!isset($_GET['page'])) {
						include('User.php');
					}
					else if ($_GET['page'] == 'Daftar') {
						include('Daftar.php');
					}
					else if ($_GET['page'] == 'tambah_game') {
						include('tambahgame.php');
					}
					else
					{
						include('User.php');
					}
		}
?>
