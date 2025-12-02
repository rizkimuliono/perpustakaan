<?php
include 'layout-header.php';

$penulis = mysqli_query($conn, "SELECT 
    buku.buku_id,
    buku.judul,
    buku.isbn,
    buku.tahun_terbit,
    penulis.nama_penulis
FROM buku
INNER JOIN penulis 
    ON buku.penulis_id = penulis.penulis_id;
");
?>
<h3>Data Buku</h3>
<a href="penulis-create.php" class="btn btn-primary btn-sm">Tambah Data</a>
<table class="table">
    <tr>
        <th>No</th>
        <th>Judul Buku</th>
        <th>ISBN</th>
        <th>Penulis</th>
        <th>Tahun Terbit</th>
        <th>Aksi</th>
    </tr>
    <?php $no = 1; ?>
    <?php foreach ($penulis as $row) { ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['judul'] ?></td>
            <td><?= $row['isbn'] ?></td>
            <td><?= $row['nama_penulis'] ?></td>
            <td><?= $row['tahun_terbit'] ?></td>
            <td>
                <a href="penulis-edit.php?id=<?= $row['penulis_id'] ?>" class="btn btn-warning btn-sm">edit</a>
                <a onClick="return confirm('Hapus Data ini ?')" href="penulis-delete.php?id=<?= $row['penulis_id'] ?>" class="btn btn-danger btn-sm">del</a>
            </td>
        </tr>
    <?php } ?>
</table>

<?php include 'layout-footer.php'; ?>