<?php
 include "koneksi.php";
//Akhir Koneksi---------------------------------------------------------
 
if(isset($_POST['simpan'])){
$nama     = $_POST['nama_merek'];
$warna    = $_POST['warna'];
$jumlah    = $_POST['jumlah'];
 
$data = mysqli_query($mysqli, "INSERT INTO user SET nama_merek='$nama', warna='$warna', jumlah='$jumlah'") or die ("data salah : ".mysqli_error($mysqli));
 
if ($data) {
echo "Berhasil Input Data";
echo "<a href='index.php'>lihat</a>";
} else {
echo "Gagal Input Data!!!";
echo "<a href='create.php'>Kembali</a>";
}
}
?>