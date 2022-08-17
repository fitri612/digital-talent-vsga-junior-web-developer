<?php 

$databaseHost = 'localhost';
$databaseName = 'db_data_vsga';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if ($mysqli) {
    // echo "Koneksi Server OK ";
} else {
    echo "Server tidak Konek";
}

?>