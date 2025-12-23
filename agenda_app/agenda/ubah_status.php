<?php
include '../config/database.php';

$id = $_GET['id'];

$query = "UPDATE agenda SET status='Selesai' WHERE id_agenda='$id'";
mysqli_query($conn, $query);

header("Location: index.php");
exit;
