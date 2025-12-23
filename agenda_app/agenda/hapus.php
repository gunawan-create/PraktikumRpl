<?php
include "../config/database.php";
mysqli_query($conn, "DELETE FROM agenda WHERE id_agenda=$_GET[id]");
header("Location: index.php");
