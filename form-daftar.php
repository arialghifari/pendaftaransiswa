<?php
	require "layout/header.php";
?>

<div class="container mt-3 col-lg-5">
	<header>
		<h3>Formulir Pendaftaran Siswa Baru</h3>
	</header>
	
	
	<form action="proses-pendaftaran.php" method="POST">
		<div class="form-group">
			<label for="nama">Nama Lengkap</label>
			<input type="text" class="form-control" name="nama"/>
		</div>

		<div class="form-group">
			<label for="alamat">Alamat</label>
			<textarea class="form-control" name="alamat"></textarea>
		</div>

		<div class="form-group">
			<label for="jenis_kelamin">Jenis Kelamin</label>

			<div class="form-check">
			  <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="laki-laki">
			  <label class="form-check-label" for="laki-laki">
			    Laki-Laki
			  </label>
			</div>

			<div class="form-check">
			  <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="perempuan">
			  <label class="form-check-label" for="perempuan">
			    Perempuan
			  </label>
			</div>
		</div>
		
		<div class="form-group">
			<label for="agama">Agama</label>
			<select name="agama" class="form-control">
				<option>Islam</option>
				<option>Kristen</option>
				<option>Hindu</option>
				<option>Budha</option>
				<option>Konghucu</option>
			</select>
		</div>

			<p>
				
			</p>

		<div class="form-group">
			<label for="sekolah_asal">Sekolah Asal</label>
			<input type="text" name="sekolah_asal" class="form-control" />
		</div>

		<input type="submit" value="Daftar Siswa" class="btn btn-md btn-primary" name="daftar" />
		<a href="index.php" class="btn btn-md btn-danger">Batal</a>
		
	</form>


</div>
</body>
</html>
