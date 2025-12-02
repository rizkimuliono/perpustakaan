<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = "DELETE FROM penulis WHERE penulis_id = $id";
if(mysqli_query($conn, $query)) {
    header("Location: penulis-index.php");
    exit;
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}