<?php
	require "layout/header.php";
	include("config.php");
?>

<div class="container mt-3">
	<header>
		<h3>DATA SISWA</h3>
	</header>
	
	<nav>
		<a href="form-daftar.php">[+] Tambah Data Baru</a>
	</nav>
	
	<br>
	
	<table border="1" class="table table-bordered">
	<thead class="thead-dark">
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Jenis Kelamin</th>
			<th>Agama</th>
			<th>Sekolah Asal</th>
			<th>Tindakan</th>
		</tr>
	</thead>
	<tbody>
		
		<?php
		$sql = "SELECT * FROM calon_siswa";
		$query = mysqli_query($db, $sql);
		
		while($siswa = mysqli_fetch_array($query)){
			echo "<tr>";
			
			echo "<th>".$siswa['id']."</th>";
			echo "<td>".$siswa['nama']."</td>";
			echo "<td>".$siswa['alamat']."</td>";
			echo "<td>".$siswa['jenis_kelamin']."</td>";
			echo "<td>".$siswa['agama']."</td>";
			echo "<td>".$siswa['sekolah_asal']."</td>";
			
			echo "<td>";
			echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
			echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
			echo "</td>";
			
			echo "</tr>";
		}		
		?>
		
	</tbody>
	</table>
	
	<p>Total Data Siswa : <?php echo mysqli_num_rows($query) ?></p>

</div>	
</body>
</html>
