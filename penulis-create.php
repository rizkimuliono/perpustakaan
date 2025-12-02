<?php
include 'layout-header.php';
?>
<h3>Tambah Data Penulis</h3>
<form action="penulis-save.php" method="post">
    <div class="mb-3">
        <label for="nama_penulis" class="form-label">Nama Penulis</label>
        <input type="text" class="form-control" id="nama_penulis" name="nama_penulis" required>
    </div>
    <div class="mb-3">
        <label for="bio" class="form-label">Biodata</label>
        <textarea class="form-control" id="bio" name="bio" rows="3" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>


<?php include 'layout-footer.php'; ?>