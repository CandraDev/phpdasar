<?php
// array
// variable yg dapat memiliki banyak nilai
// elemen di array boleh berbeda tipe data

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu", "Kamis");
// cara baru
$bulan = ["Januari", "Februari", "Mei"];
$arr1 = [1, "Candra", true];

//menampilkan array
//var_dump, print_r
// var_dump($hari);
// echo "<br>";
// print_r($bulan);

//menampilkan 1 element pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];


// menambahkan elemen pada array
var_dump($hari);
$hari[] = "Kamis"; // menambahkan Kamis di akhir array hari
echo "<br>";
var_dump($hari);
?>