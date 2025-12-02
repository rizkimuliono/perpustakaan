<?php
include 'koneksi.php';

$nama_penulis = $_POST['nama_penulis'];
$bio = $_POST['bio'];

$query = "INSERT INTO penulis (nama_penulis, bio) VALUES ('$nama_penulis', '$bio')";

if(mysqli_query($conn, $query)) {
    header('Location: penulis-index.php');
} else {
    echo "Error: " . mysqli_error($conn);
}
?>