<?php
include __DIR__ . '/../koneksi.php';
$sql = "SELECT * FROM buku";
$books = $koneksi->query($sql);
$books = $books->fetch_all(MYSQLI_ASSOC);
$no = 1;
?>

<h1>Data buku</h1>
<a href="create.php">Tambah Buku</a>

<table border="1">
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

<?php foreach ($books as $book): ?>
<tr>
    <td><?= $no++; ?></td>
    <td><?= $book['judul']; ?></td>
    <td><?= $book['pengarang']; ?></td>
    <td><?= $book['stok']; ?></td>
    <td>
        <a href="edit.php?id=<?= $book['id']; ?>">Edit</a> |
        <a href="delete.php">Hapus</a>
    </td>
</tr>
<?php endforeach; ?>

</tbody>
</table>
