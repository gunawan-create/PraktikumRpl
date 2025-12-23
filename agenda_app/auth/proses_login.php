<?php
session_start();
include "../config/database.php";

$email    = $_POST['email'];
$password = $_POST['password'];

$q = mysqli_query($conn, "SELECT * FROM user WHERE email='$email'");
$data = mysqli_fetch_assoc($q);

if ($data && password_verify($password, $data['password'])) {
    $_SESSION['id_user'] = $data['id_user'];
    $_SESSION['nama'] = $data['nama'];
    header("Location: ../agenda/index.php");
} else {
    echo "Login gagal";
}
