<!DOCTYPE html>
<html>
<head>
	<title>Penerimaan Mahasiswa baru Politehnik Negeri sriwijaya</title>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/index.css">

	<!-- <link rel="stylesheet" href="jumbotron.css"> -->
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
<div id="jumbo" class="jumbotron jumbotron-fluid">
        <div class="container">
            
        </div>
    </div>

	<div class="container">
		<div class="row content">
				<div class="col-6">
					<h3>Pendaftaran Mahasiswa Baru</h3>
					<h1>Politehnik Negeri Sriwijaya</h1>
					<p class="konten">Bergabung menjadi keluarga Polsri, dan wujudkan impian mu di Polsri!</p>
					<!-- -->
					<nav>
							<a href="form-daftar.php" class="btn btn-primary">Daftar Baru</a>	
							<a href="list-mahasiswa.php" class="btn btn-primary">Pendaftar</a>	
					</nav>
			</div>
				<div class="col-6">
					<img class="img-bordered" src="assets/img/collage.jpg" alt="">
				</div>
		</div>
	</div>
	
	<?php if(isset($_GET['status'])): ?>
	<div class="container">
		<?php
			if($_GET['status'] == 'sukses'){
				echo "Pendaftaran Mahasisiswa baru berhasil!";
			} else {
				echo "Pendaftaran gagal!";
			}
		?>
	
	<?php endif; ?>
	<div class="row footer">
        <div class="col text-center">
        <p class="mt-5 mb-3 text-muted">Copyright &copy; All Right Reserved by Fariz 2020-2021</p>
  
        </div>
    </div>
	</body>
</html>