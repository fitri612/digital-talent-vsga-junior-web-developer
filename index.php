<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM laptop");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<h2>VSGA PERTEMUAN 12</h2><BR>
<a href="add.php">Tambah Data Barang</a><br/><br/>
 
    <table width='50%' border=1>
    <tr style="background-color: yellow">
    <th>Nomor</th><th align="left">Nama Merek</th> <th align="left">Warna</th> <th>Jumlah</th> <th>Update</th>
    </tr>
    <?php  
    $nmr=1;
    while($printer_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td width='50' align='center'>".$nmr++."</td>";
        echo "<td>".$printer_data['nama_merek']."</td>";
        echo "<td>".$printer_data['warna']."</td>";
        echo "<td width='80' align='center'>".$printer_data['jumlah']."</td>";    
        echo "<td width='90' align='center'><a href='edit.php?no=$printer_data[no]'>Edit</a> |";
        echo "<a href='delete.php?no=$printer_data[no]' onclick='return confirm('Yakin akan hapus?')'>Delete</a>";
        echo "</td></tr>";        
    }
    ?>
    </table>
</body>
</html>
