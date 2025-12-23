<?php
include "../config/database.php";

mysqli_query($conn, "UPDATE agenda SET
    judul='$_POST[judul]',
    tanggal='$_POST[tanggal]',
    waktu_mulai='$_POST[waktu_mulai]'
WHERE id_agenda=$_POST[id]");

header("Location: index.php");
