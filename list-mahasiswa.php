<?php include("config.php"); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran MhaSiswa Baru </title>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/index.css">
    <script src="assets/jquery/jquery-3.5.1.min.js"></script>	
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
  	<img src="assets/img/polsri.png" width="50" height="50" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="list-mahasiswa.php">Profil Mahasiswa Baru</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Berita</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Jurusan</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Akademik</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Panduan</a>
				</li>
            </ul>
        </div>
</nav>
	<div class="container">
		<h3>Mahasiswa yang sudah mendaftar</h3>
	
	
	<nav>
		<a class="btn btn-primary" href="form-daftar.php">[+] Tambah Baru</a>
	</nav>
	
	<br>
	
	<table class="table" border="1">
	<thead class="table-info">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Jenis Kelamin</th>
			<th>Agama</th>
			<th>Sekolah Asal</th>
			<th>Jurusan</th>
			<th>Tindakan</th>
		</tr>
	</thead>
	<tbody>
		
		<?php
		$sql = "SELECT * FROM calon_mahasiswa";
		$query = mysqli_query($db, $sql);
		
		while($siswa = mysqli_fetch_array($query)){
			echo "<tr>";
			
			echo "<td>".$siswa['id']."</td>";
			echo "<td>".$siswa['nama']."</td>";
			echo "<td>".$siswa['alamat']."</td>";
			echo "<td>".$siswa['jenis_kelamin']."</td>";
			echo "<td>".$siswa['agama']."</td>";
			echo "<td>".$siswa['sekolah_asal']."</td>";
			echo "<td>".$siswa['jurusan']."</td>";
			
			echo "<td>";
			echo "<a class='btn btn-sm  btn-secondary' href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
			echo "<a class='btn btn-danger btn-sm' href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
			echo "</td>";
			
			echo "</tr>";
		}		
		?>
		
	</tbody>
	</table>
	
	<p>Total: <?php echo mysqli_num_rows($query) ?></p>
	</div>
	</body>
</html>
