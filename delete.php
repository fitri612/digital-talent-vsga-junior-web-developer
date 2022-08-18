<?php
// Hubungkan dengan file config
include_once("config.php");
 
// ambil Kode ID yang akan di hapus 
$no = $_GET['no'];
 
// Delete record sesuai Id
$result = mysqli_query($mysqli, "DELETE FROM printer WHERE no=$no");
 
// setelah di hapus kembali ke file index utk cek hasil .
header("Location:index.php");
?>
