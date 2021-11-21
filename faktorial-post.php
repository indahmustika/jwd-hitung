<?php 

	// Fungsi untuk menghitung nilai faktorial
function hitungFaktorial($angka){
	$hasil = 1;
	for($i = $angka; $i > 0; $i--){
		$hasil = $hasil * $i;
	}
	return $hasil;
}
	// Fungsi untuk menyimpan data
function simpanData($waktu, $jenis, $angka, $hasil){
	$list = array([$waktu, $jenis, $angka, $hasil]);
	$fp = fopen('faktorial.csv', 'a');
	foreach ($list as $fields) {
		fputcsv($fp, $fields);
	}
	fclose($fp);
}

	// Mendapatkan input dan menggunakan fungsi
$waktu = date("Y-m-d H:i:s");
$jenis = "Faktorial";
$angka = $_POST['angka'];
$hasil = hitungFaktorial($angka);
simpanData($waktu, $jenis, $angka, $hasil);
header("location:faktorial-input.php?angka=$angka&hasil=$hasil");

?>