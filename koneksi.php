<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "perpus_b5";

$koneksi = new mysqli($hostname, $username, $password, $database);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
