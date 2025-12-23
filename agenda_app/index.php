<?php
session_start();

if (isset($_SESSION['id_user'])) {
    header("Location: agenda/index.php");
} else {
    header("Location: auth/login.php");
}
