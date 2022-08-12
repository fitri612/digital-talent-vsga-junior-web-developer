<html>
<head>
<title>Create</title>
</head>
<body>
	<?php
	include"koneksi.php";
	$data = mysqli_query($mysqli, "SELECT * FROM user WHERE id='$_GET[id]'");
$datashow = mysqli_fetch_array($data);
	?>
<form action="action_update.php" method="post">
<p>Ubah DATA User</p>
<p>
	<input type="hidden" name="id"  value="<?php echo $datashow['id']; ?>">
Nama Merek : <input type="text" name="nama_merek"  value="<?php echo $datashow['nama_merek']; ?>"> <br>
Warna : <input type="text" name="warna" value="<?php echo $datashow['warna']; ?>"> <br>
Jumlah :  <input type="text" name="jumlah"  value="<?php echo $datashow['jumlah']; ?>"> <br>
</p>
 <input type="submit" name="update" value="EDIT">
</form>
</body>
</html>