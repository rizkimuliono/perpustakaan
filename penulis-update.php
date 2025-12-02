<?php
include 'koneksi.php';

$id = $_POST['penulis_id'];
$nama_penulis = $_POST['nama_penulis'];
$bio = $_POST['bio'];

$query = "UPDATE penulis SET nama_penulis = '$nama_penulis', bio = '$bio' WHERE penulis_id = $id";
if(mysqli_query($conn, $query)) {
    header("Location: penulis-index.php");
    exit;
} else {
    echo "Error updating record: " . mysqli_error($conn);
}