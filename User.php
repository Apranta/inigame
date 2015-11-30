<?php
	include 'template/header.php';
?>
	<div class="container" align="center">
		<h1>Data user</h1>
		<table class="table" align="center">
			<tr>
				<th>No</th>
				<th>Nama </th>
				<th>Username </th>
				<th>Gender</th>
				<th>Aksi</th>
			</tr>
			<?php
				$i=1;
				include "koneksi.php";
				$query = "SELECT * FROM user";
				$hasil = mysql_query($query);
				while ($data = mysql_fetch_array($hasil))
				{
				echo "<tr>
				<td>".$i."</td>
				<td>".$data['Nama']."</td>
				<td>".$data['Username']."</td>
				<td>".$data['gender']."</td>
				<td><a class='btn btn-warning' href=edit_user.php?id=".$data['Username'].">EDIT</a>&nbsp
				    <a class='btn btn-danger' href=delete_user.php?id=".$data['Username'].">HAPUS</a></td>
				</tr>";
				$i++;
			}?>
		</table>
		<i>note* 1=laki laki , 2 = perempuan</i>
	</div>
