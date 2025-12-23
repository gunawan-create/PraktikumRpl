<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "agenda_app";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal");
}
?>
