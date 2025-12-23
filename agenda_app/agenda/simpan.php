<?php
session_start();
include "../config/database.php";

$id_user = $_SESSION['id_user'];

mysqli_query($conn, "INSERT INTO agenda VALUES (
    NULL, '$id_user',
    '$_POST[judul]',
    '$_POST[tanggal]',
    '$_POST[waktu_mulai]',
    NULL,
    '$_POST[prioritas]',
    NULL,
    'Belum',
    NOW(),
    NULL
)");

header("Location: index.php");
