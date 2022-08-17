<html>
<head>
	<title>Tambah Produk</title>
</head>
 
<body>
	<h2>VSGA PERTEMUAN 12</h2><BR>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Nama Merek</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr> 
				<td>Warna</td>
				<td><input type="text" name="warna"></td>
			</tr>
			<tr> 
				<td>Jumlah</td>
				<td><input type="text" name="jumlah"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$nama = $_POST['nama'];
		$warna = $_POST['warna'];
		$jumlah = $_POST['jumlah'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO laptop(nama_merek,warna,jumlah) VALUES('$nama','$warna','$jumlah')");
		
		// Show message when user added
		echo "Barang Berhasil Ditambahkan. <a href='index.php'><br>Lihat Data Barang</a>";
	}
	?>
</body>
</html>
