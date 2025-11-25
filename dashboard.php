<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <h1>ini halaman dashboard</h1>
    <h3>Hai, <?= $_SESSION['nama']; ?> <small>(<?= ($_SESSION['type'] == 1) ? "Administrator" : "Member"; ?>)</small></h3>

    <ul>
        <?php if ($_SESSION['type'] == 1) { ?>
            <li><a href="#">Data User</a></li>
            <li><a href="#">Data Penulis</a></li>
            <li><a href="#">Data Buku</a></li>
            <li><a href="#">Data Peminjaman</a></li>
        <?php } ?>
        <?php if ($_SESSION['type'] == 0) { ?>
            <li><a href="#">Pinjam Buku</a></li>
        <?php } ?>

        <li><a href="logout.php">Logout</a></li>
    </ul>
</body>

</html>