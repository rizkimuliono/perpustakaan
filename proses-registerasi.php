<?php
include("koneksi.php");

// print_r($_POST);
$nama       = $_POST['nama'];
$email      = $_POST['email'];
$password   = md5($_POST['password']);
$type       = $_POST['type_user'];
$join_date  = $_POST['join_date'];

$stmt = mysqli_prepare($conn, "INSERT INTO users (nama, email, password, join_date, type_user) VALUES (?,?,?,?,?)");
mysqli_stmt_bind_param($stmt, "ssssi", $nama, $email, $password, $join_date, $type);

if (mysqli_stmt_execute($stmt)) {
    echo "Data baru berhasil ditambahkan.";
} else {
    echo "<span style='color:red;'>Error: " . mysqli_error($conn) . "</span>";
    echo '<br><a href="registerasi.php">< Kembali</a>';
}
mysqli_stmt_close($stmt);

?>