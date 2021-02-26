<!DOCTYPE html>
<html>
<head>
	<title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/index.css">
    <script src="assets/jquery/jquery-3.5.1.min.js"></script>
</head>

<body>
	<div class="container">
		<h3>Formulir Pendaftaran Mahasiswa Baru</h3>
	<form action="proses-pendaftaran.php" method="POST">
		<div class="mb-3">
			<label for="nama" class="form-label">Nama: </label>
			<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" />
		</div>
		<div class="mb-3 form-floating">
			<label for="alamat" class="form-label">Alamat: </label>
			<textarea class="form-control" name="alamat"></textarea>
		</div>
			<label for="jenis_kelamin" class="form-label">Jenis Kelamin: </label>
		<div class="form-check">
			<input class="form-check-input" type="radio" value="laki_laki" name="jenis_kelamin" id="flexCheckDefault">
				<label class="form-check-label" for="flexCheckDefault">
    				Laki Laki
				</label>
			
		</div>
		<div class="form-check">
		<input class="form-check-input" type="radio" value="perempuan" name="jenis_kelamin" id="flexCheckDefault">
				<label class="form-check-label" for="flexCheckDefault">
    				perempuan
				</label>
		</div>
		<br>
		
		<div class="mb-3">
			<label for="agama">Agama: </label>
			<select class="form-select form-control" aria-label="Default select example" name="agama">
			<option selected>--PILIH AGAMA--</option>
				<option>Islam</option>
				<option>Kristen</option>
				<option>Hindu</option>
				<option>Budha</option>
				<option>Atheis</option>
			</select>
			
		</div>
		<div class="mb-3">
			<label for="sekolah_asal">Sekolah Asal: </label>
			<input class="form-control" type="text" name="sekolah_asal" placeholder="nama sekolah" />
		</div>
		<div class="mb-3">
			<label for="jurusan">Jurusan : </label>
			<input class="form-control"type="text" name="jurusan" placeholder="Jurusan" />
		</div>
		<div class="mb-3">
			<input class="btn btn-primary" type="submit" value="Daftar" name="daftar" />
		</div>
	</form>
	</div>
	</body>
</html>
