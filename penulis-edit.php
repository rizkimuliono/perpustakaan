<?php
include 'layout-header.php';

$id = $_GET['id'];
$query = "SELECT * FROM penulis WHERE penulis_id = $id";
$result = mysqli_query($conn, $query);
$penulis = mysqli_fetch_assoc($result);
?>
<h3>Edit Data Penulis</h3>
<form action="penulis-update.php" method="post">
    <input type="hidden" name="penulis_id" value="<?= $penulis['penulis_id'] ?>">
 <div class="mb-3">
        <label for="nama_penulis" class="form-label">Nama Penulis</label>
        <input value="<?= $penulis['nama_penulis'] ?>" type="text" class="form-control" id="nama_penulis" name="nama_penulis" required>
    </div>
    <div class="mb-3">
        <label for="bio" class="form-label">Biodata</label>
        <textarea class="form-control" id="bio" name="bio" rows="3" required><?= $penulis['bio'] ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

<?php include 'layout-footer.php'; ?>