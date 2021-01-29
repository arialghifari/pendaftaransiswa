<?php
	require "layout/header.php";
?>

<div class="container">

<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "<div class='alert alert-success' role='alert'>
						  Pendaftaran Siswa Berhasil!
						</div>";
			} else {
				echo "<div class='alert alert-danger' role='alert'>
						  Pendaftaran Siswa Gagal!
						</div>";
			}
		?>
	</p>
<?php endif; ?>


	<div class="jumbotron mt-3">
	  <h1 class="display-4 mx-auto">SISTEM PENDAFTARAN SISWA</h1>
	  <hr class="my-3">
	  <p>SISTEM PENDAFTARAN SISWA TERPADU SMK TI</p>
	  <a class="btn btn-primary btn-md" href="form-daftar.php" role="button">Daftar Siswa</a>
	  <a class="btn btn-primary btn-md" href="list-siswa.php" role="button">Data Siswa</a>
	</div>
	
	
</div>	
</body>
</html>
