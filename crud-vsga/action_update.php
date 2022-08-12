<?php
include"koneksi.php";
 
if(isset($_POST['update'])){
$id            = $_POST['id'];
$nama_merek     = $_POST['nama_merek'];
$warna    = $_POST['warna'];
$jumlah    = $_POST['jumlah'];
 
 
$data = mysqli_query($mysqli, "UPDATE user SET nama_merek='$nama_merek', warna='$warna', jumlah='$jumlah' WHERE id='$id'") or die ("data salah : ".mysqli_error($mysqli));
 
if ($data) {
echo "Berhasil Update Data <br>";
echo "<a href='index.php'>Kembali</a>";
} else {
echo "Gagal Input Data!!! <br>";
echo "<a href='index.php'>Kembali</a>";
}
}
?>