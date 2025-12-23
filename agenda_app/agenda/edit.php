<?php
include "../config/database.php";
$data = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT * FROM agenda WHERE id_agenda=$_GET[id]")
);
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<div class="container">
<h2>Edit Agenda</h2>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?= $data['id_agenda']; ?>">
    <input type="text" name="judul" value="<?= $data['judul']; ?>">
    <input type="date" name="tanggal" value="<?= $data['tanggal']; ?>">
    <input type="time" name="waktu_mulai" value="<?= $data['waktu_mulai']; ?>">
    <button>Update</button>
</form>
</div>
</body>
</html>
