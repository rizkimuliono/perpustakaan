<?php
include 'layout-header.php';

$penulis = mysqli_query($conn, "SELECT * from penulis");
?>
<h3>Data Penulis</h3>
<a href="penulis-create.php" class="btn btn-primary btn-sm">Tambah Data</a>
<table class="table">
    <tr>
        <th>No</th>
        <th>Nama Penulis</th>
        <th>Biodate</th>
        <th>Aksi</th>
    </tr>
    <?php $no = 1; ?>
    <?php foreach ($penulis as $row) { ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['nama_penulis'] ?></td>
            <td><?= $row['bio'] ?></td>
            <td>
                <a href="penulis-edit.php?id=<?= $row['penulis_id'] ?>" class="btn btn-warning btn-sm">edit</a>
                <a onClick="return confirm('Hapus Data ini ?')" href="penulis-delete.php?id=<?= $row['penulis_id'] ?>" class="btn btn-danger btn-sm">del</a>
            </td>
        </tr>
    <?php } ?>
</table>

<?php include 'layout-footer.php'; ?>