<?php

include __DIR__ . '/../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'];

    $sql = "SELECT * FROM buku WHERE id=?";
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $book = $stmt->get_result()->fetch_assoc();

} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $stok = $_POST['stok'];
    $id = $_GET['id'];

    $sql = "UPDATE buku SET judul=?, pengarang=?, stok=? WHERE id=?";
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("sssi", $judul, $pengarang, $stok, $id);
    $result = $stmt->execute();

    if ($result) {
        header("location:index.php");
    }
}

?>

<h1>Edit Buku</h1>

<form action="" method="post">
    <div class="form-item">
        <label for="judul">Judul</label>
        <input type="text" name="judul" id="judul" value="<?= $book['judul'] ?>">
    </div>

    <div class="form-item">
        <label for="pengarang">Pengarang</label>
        <input type="text" name="pengarang" id="pengarang" value="<?= $book['pengarang'] ?>">
    </div>

    <div class="form-item">
        <label for="stok">Stok</label>
        <input type="number" name="stok" id="stok" value="<?= $book['stok'] ?>">
    </div>

    <button type="submit">Edit</b
