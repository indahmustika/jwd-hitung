<?php 

	// Fungsi untuk menghitung nilai faktorial
function hitungPangkat($angka, $pangkat){
	$hasil = 1;
	for($i = 0; $i < $pangkat; $i++){
		$hasil = $hasil * $angka;
	}
	return $hasil;
}
	// Fungsi untuk menyimpan data
function simpanData($waktu, $jenis, $input, $hasil){
	$list = array([$waktu, $jenis, $input, $hasil]);
	$fp = fopen('pangkat.csv', 'a');
	foreach ($list as $fields) {
		fputcsv($fp, $fields);
	}
	fclose($fp);
}

	// Mendapatkan input dan menggunakan fungsi
$waktu   = date("Y-m-d H:i:s");
$jenis   = "Pangkat";
$angka   = $_POST['angka'];
$pangkat = $_POST['pangkat'];
$hasil	 = hitungPangkat($angka, $pangkat);
$input 	 = $angka ."^" .$pangkat;
simpanData($waktu, $jenis, $input, $hasil);
header("location:pangkat-input.php?angka=$angka&pangkat=$pangkat&hasil=$hasil");

?>