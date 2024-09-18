<?php
$servername = "localhost";
$database = "perpustakaan";
$username = "root";
$password = "";
// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);
// mengecek koneksi
if (!$conn) {
    echo("Koneksi gagal: " . mysqli_connect_error());
}
?>