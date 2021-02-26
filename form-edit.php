<?php 

include("config.php");

if( !isset($_GET['id']) ){
	// kalau tidak ada id di query string
	header('Location: list-mahasiswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_mahasiswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Formulir Edit Mahasiswa | SMK Coding</title>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/index.css">
    <script src="assets/jquery/jquery-3.5.1.min.js"></script>
</head>

<body>
	<div class="container">
		<h3>Formulir Edit Mahasiswa</h3>
	
	
	<form action="proses-edit.php" method="POST">
		<input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
		
		<div class="mb-3">
			<label for="nama" class="form-label">Nama: </label>
			<input type="text" class="form-control" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" />
		</div>
		<div class="mb-3">
			<label for="alamat" class="form-label">Alamat: </label>
			<textarea class="form-control" name="alamat"><?php echo $siswa['alamat'] ?></textarea>
		
		<div class="mb-3">
			<label for="jenis_kelamin" class="form-label">Jenis Kelamin: </label>
			<div>
			<?php $jk = $siswa['jenis_kelamin']; ?>
			<label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
			<label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
			</div>
		
		<div class="mb-3">
			<label for="agama">Agama: </label>
			<?php $agama = $siswa['agama']; ?>
			<select class="form-select form-control" name="agama">
				<option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
				<option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
				<option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
				<option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
				<option <?php echo ($agama == 'Atheis') ? "selected": "" ?>>Atheis</option>
			</select>
		</div>
		<div class="mb-3">
			<label for="sekolah_asal">Sekolah Asal: </label>
			<input class="form-control" type="text" name="sekolah_asal" placeholder="nama sekolah" value="<?php echo $siswa['sekolah_asal'] ?>" />
		</div>
		<div class="mb-3">
			<label for="jurusan">jurusan: </label>
			<input class="form-control" type="text" name="jurusan" placeholder="jurusan" value="<?php echo $siswa['jurusan'] ?>" />
		</div>
		<div class="mb-3">
			<input class="btn btn-primary" type="submit" value="Simpan" name="simpan" />
		</div>
		
	
	</form>
	</div>
	</body>
</html>
