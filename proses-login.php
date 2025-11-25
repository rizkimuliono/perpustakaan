<?php
include("koneksi.php");

$email      = $_POST['email'];
$password   = md5($_POST['password']);

$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    $row = mysqli_fetch_assoc($result);
    
    session_start();
    $_SESSION['username'] = $row['email'];
    $_SESSION['nama'] = $row['nama'];
    $_SESSION['type'] = $row['type_user'];

    header('Location: dashboard.php');
}else{
    echo "Data Tidak Ditemukan / User / Password Salah!";
    echo  '<br><a href="index.php">< Kembali</a>';
}

?>