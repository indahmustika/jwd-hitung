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
				<li class="nav-item"><a class="nav-link" href="index.php">Beranda</a></li>
				<li class="nav-item"><a class="nav-link" href="faktorial-input.php">Hitung Faktorial</a></li>
				<li class="nav-item"><a class="nav-link active" href="pangkat-input.php">Hitung Pangkat</a></li>
			</ul>
		</div>
	</nav>
	<div class="container">
		<h1 class="display text-white">.</h1>
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
				<div class="card shadow">
					<h5 class="card-header bg-white text-dark">Perhitungan Pangkat</h5>
					<div class="card-body">
						<form action="pangkat-post.php" method="POST">
							<div class="row">
								<div class="col-sm-4"><input type="number" name="angka" class="form-control" placeholder="Masukkan angka" required></div>
								<div class="col-sm-4"><input type="number" name="pangkat" class="form-control" placeholder="Masukkan pangkat" required></div>
								<div class="col-sm-2"><input type="submit" class="btn btn-primary shadow" value="Hitung"></div>
							</div>
						</form>
						<?php if(isset($_GET['angka'])){ ?>
							<div class="alert alert-success shadow" role="alert">
								<div class="alert-heading">Hasil Pangkat</div>
								<hr>
								<h5><?php echo $_GET['angka']?><sup><?php echo $_GET['pangkat']?></sup> = <?php echo $_GET['hasil']?></h5>  
							</div>
						<?php }?>
					</div>
				</div>
				<br>
				<div class="card shadow">
					<h5 class="card-header bg-white text-dark">Riwayat Perhitungan <button onclick="show()" class="btn btn-primary btn-sm shadow" style="float: right;">Show</button></h5>
					<div class="card-body">
						<div class="table-responsive" id="showTable" style="display: none;">
							<table class="table table-bordered" width="99%" cellspacing="0" class="display">
								<thead>
									<tr>
										<th><center>Waktu</center></th>
										<th><center>Jenis Perhitungan</center></th>
										<th><center>Input</center></th>
										<th><center>Output</center></th>
									</tr>
								</thead>
								<tbody>
									<?php 
										$f = fopen("pangkat.csv", "r");
										while(($line = fgetcsv($f)) !== false){
											echo "<tr>";
											foreach ($line as $cell) {
												echo "<td>" .$cell ."</td>";
											}
											echo "</tr>";
										}
										fclose($f)
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<br>
			</div>
			<div class="col-sm-2"></div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
	<script src="script.js"></script>
</body>
</html>