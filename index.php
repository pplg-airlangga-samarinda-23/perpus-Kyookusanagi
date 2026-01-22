<?php
include "koneksi.php";

$sql = "SELECT * FROM buku";
$books = $koneksi->query($sql)->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>
</head>
<body>
<h1>Perpustakaan KS Tubun</h1>
<h2>Selamat Datang</h2>

<nav>
    <ul>
        <li>Katalog Buku</li>
        <li>Tentang</li>
        <li><a href="login.php">Login</a></li

<h1>Data Buku</h1>
<a href="create.php">Tambah Buku</a>

<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; foreach ($books as $book): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $book['judul'] ?></td>
            <td><?= $book['pengarang'] ?></td>
            <td><?= $book['stok'] ?></td>
            <td>
                <a href="edit.php?id=<?= $book['id'] ?>">Edit</a> |
                <a href="hapus.php?id=<?= $book['id'] ?>" onclick="return confirm('Hapus data?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

</body>
</html>
