<?php
include __DIR__ . '/../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'];
    $sql = "DELETE FROM buku WHERE id=?";
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("i", $id);
    $result = $stmt->execute();

    if ($result) {
        header("location:index.php");
    }
}