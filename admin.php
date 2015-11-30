<?php
	include 'template/header.php';
?>

		<div class="col-md-3 sidebar">
			<div>
				<ul class="nav nav-pills nav-stacked ">
			 		<li><a href="admin.php?page=Daftar" class="btn btn-block">Tambah User</a></li>
					<li><a href="admin.php?page=User" class="btn btn-block">Daftar User</a></li>
			 		<li><a href="admin.php?page=tambah_game" class="btn btn-block">Tambah Game</a></li>
				</ul>
			</div>
		</div>
		<div class="col-md-9">

	<?php
					if (!isset($_GET['page'])) {
						include('User.php');
					}
					else if ($_GET['page'] == 'Daftar') {
						include('Daftar.php');
					}
?>