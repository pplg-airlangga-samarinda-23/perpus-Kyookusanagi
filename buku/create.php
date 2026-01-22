<?php

include __DIR__ . '/../koneksi.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $stok = $_POST['stok'];
    $sql = "INSERT INTO buku (judul, pengarang, stok) VALUES (?, ?, ?)";
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param('ssi', $judul, $pengarang, $stok);
    $result = $stmt->execute();

    if ($result) {
        header('Location: index.php');
    }
}
?>

<h1>Tambah Buku Baru</h1>
<form action="" method="post">
    <div class="form-item">
        <label for="judul">Judul Buku</label>
        <input type="text" name="judul" id="judul" required>
    </div>

    <div class="form-item">
        <label for="pengarang">Pengarang</label>
        <input type="text" name="pengarang" id="pengarang" required>
    </div>

    <div class="form-item">
        <label for="stok">Stok</label>
        <input type="number" name="stok" id="stok" required>
    </div>

    <button type="submit">Tambah</button>
</form>
