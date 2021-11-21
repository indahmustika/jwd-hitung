<?php 

// Fungsi untuk menjumlah data
function hitungTotal($angka1, $angka2){
	$hasil = $angka1 + $angka2;
	return $hasil;
}
// Fungsi untuk menghitung persentase
function hitungPersentase($angka, $total){
	$hasil = $angka / $total * 100;
	return number_format((float)$hasil, 2, '.', '');
}

$faktorial  = file('faktorial.csv');
$pangkat    = file('pangkat.csv');
$jumlah_fk  = count($faktorial);
$jumlah_pk	= count($pangkat);
$total		= hitungTotal($jumlah_fk, $jumlah_pk);
$persen_fk	= hitungPersentase($jumlah_fk, $total);
$persen_pk	= hitungPersentase($jumlah_pk, $total);

?>

<html>
<head>
	<title>Sistem Perhitungan</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-gray shadow">
		<div class="container">
			<a class="navbar-brand" href="">Sistem Perhitungan</a>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item"><a class="nav-link active" href="index.php">Beranda</a></li>
				<li class="nav-item"><a class="nav-link" href="faktorial-input.php">Hitung Faktorial</a></li>
				<li class="nav-item"><a class="nav-link" href="pangkat-input.php">Hitung Pangkat</a></li>
			</ul>
		</div>
	</nav>
	<div class="container">
		<h1 class="display text-white">.</h1>
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
				<div class="jumbotron shadow bg-white">
					<h1 class="display-4">Selamat Datang</h1>
					<p class="lead">di sistem untuk menghitung bilangan faktorial dan perpangkatan</p>
					<a class="btn btn-primary shadow" href="faktorial-input.php" role="button">Perhitungan Faktorial</a>
					<a class="btn btn-primary shadow" href="pangkat-input.php" role="button">Perhitungan Pangkat</a>		
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="card shadow">
							<h5 class="card-header bg-white text-dark">Total Perhitungan</h5>
							<div class="card-body">
								<div class="row">
									<div class="col-sm-4"><h1 style="margin-left: 30px;"><?php echo $total?></h1></div>
									<div class="col-sm-6"><h5>Perhitungan</h5></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="card shadow">
							<h5 class="card-header bg-white text-dark">Persentase Perhitungan</h5>
							<div class="card-body">
								<div class="row">
									<div class="col-sm-6" style="margin-left: 10px;"><h6 class="text-primary">Faktorial</h6></div>
									<div class="col-sm-5"><h6 class="text-primary">Pangkat</h6></div>
								</div>
								<div class="row">
									<div class="col-sm-6" style="margin-left: 10px;"><h5><?php echo $persen_fk?> %</h5></div>
									<div class="col-sm-5"><h5><?php echo $persen_pk?> %</h5></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>
</html>