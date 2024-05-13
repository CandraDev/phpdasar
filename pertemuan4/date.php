<?php
// Date
// Untuk menampilkan suatu tanggal dengan format tertentu
    // echo date("l, d-M-Y");
// Time
//  UNIX Timestamp / Epoch Time
// detik yang sudah berlalu sejak 1 Januari 1970
    // echo date("l", time()-60*60*24*100);
// MKTime
// Membuat sendiri detik yang sudah berlalu
// mktime(jam, menit, detik, bulan, tanggal, tahun) 
// echo date("l", mktime(0, 0, 0, 5, 12, 2008));

// strtotime
// detiknya dipilih dengan string format b. inggris
// echo strtotime("12 may 2008")."<br/>"; // ini sama kayak mktime dibawah.
// echo mktime(0, 0, 0, 5, 12, 2008);
    // echo date("l", strtotime("12 may 2008"));

/* FUNCTION YG AKAN KITA TEMUI DI SERI INI
String Functions
- strlen() -> output: string lenght
- strcmp() -> membandingkan dua string
- explode() -> memecah string menjadi array
- htmlspecialchars() -> bakal dipake saat method request

Utility Functions
- vardump() -> mencetak isi sebuah variable
- isset() -> cek apakah var udah dibikin atw belum
- empty() -> apakah variable yg ada, kosong atw tidak
- die() -> menghentikan program dari line itu.
- sleep() -> memberhentikan sementara

User Defined Function
- function yg kalian bikin sendiri
*/
?>