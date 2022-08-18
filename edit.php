<?php
// Koneksi ke database
include_once("config.php");
 
// Cek Isi Record 
if(isset($_POST['update']))
{	
	$no = $_POST['no'];
	
	$nama=$_POST['nama'];
	$warna=$_POST['warna'];
	$jumlah=$_POST['jumlah'];
		
	// update data 
	$result = mysqli_query($mysqli, "UPDATE printer SET nama_merek='$nama',warna='$warna',jumlah='$jumlah' WHERE no=$no");
	
	// kembali ke home 
	header("Location: index.php");
}
?>
<?php
// Tampilkan data yang di pilih 
// ambil kode No
$no = $_GET['no'];
 
// pindah data Update ke $result
$result = mysqli_query($mysqli, "SELECT * FROM printer WHERE no=$no");
 
while($printer_data = mysqli_fetch_array($result))
{
	$nama = $printer_data['nama_merek'];
	$warna = $printer_data['warna'];
	$jumlah = $printer_data['jumlah'];
}
?>
<html>
<head>	
	<title>Edit Data Barang</title>
</head>
 
<body>
	<h2>VSGA PERTEMUAN 12</h2><BR>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_barang" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Nama Merek</td>
				<td><input type="text" name="nama" value="<?php echo $nama;?>"></td>
			</tr>
			<tr> 
				<td>Warna</td>
				<td><input type="text" name="warna" value="<?php echo $warna;?>"></td>
			</tr>
			<tr> 
				<td>Jumlah</td>
				<td><input type="text" name="jumlah" value="<?php echo $jumlah;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="no" value=<?php echo $_GET['no'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
