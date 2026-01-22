<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $stok = $_POST['stok'];

    $sql = "INSERT INTO buku (judul, pengarang, stok) 
            VALUES ('$judul', '$pengarang', '$stok')";
    $koneksi->query($sql);

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
</head>
<body>

<h1>Tambah Buku</h1>

<form method="post">
    <label>Judul</label><br>
    <input type="text" name="judul" required><br><br>

    <label>Pengarang</label><br>
    <input type="text" name="pengarang"><br><br>

    <label>Stok</label><br>
    <input type="number" name="stok" required><br><br>

    <button type="submit" name="simpan">Simpan</button>
    <a href="index.php">Kembali</a>
</form>

</body>
</html>
