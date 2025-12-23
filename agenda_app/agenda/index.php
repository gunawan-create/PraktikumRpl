<?php
session_start();
include "../config/database.php";

if (!isset($_SESSION['id_user'])) {
    header("Location: ../auth/login.php");
    exit;
}

$id_user = $_SESSION['id_user'];
$data = mysqli_query($conn, "SELECT * FROM agenda WHERE id_user='$id_user'");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Agenda Harian</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<h2 align="center">Agenda Harian</h2>
<p align="center">
    Halo, <?= $_SESSION['nama']; ?> |
    <a href="../auth/logout.php">Logout</a>
</p>

<p align="center">
    <a href="tambah.php">+ Tambah Agenda</a>
</p>

<table class="table">
<tr>
    <th>Judul</th>
    <th>Tanggal</th>
    <th>Waktu</th>
    <th>Status</th>
    <th>Aksi</th>
</tr>

<?php while ($a = mysqli_fetch_assoc($data)) { ?>
<tr>
    <td><?= $a['judul']; ?></td>
    <td><?= $a['tanggal']; ?></td>
    <td><?= $a['waktu_mulai']; ?></td>

    <td class="<?= ($a['status'] == 'Selesai') ? 'status-selesai' : 'status-belum'; ?>">
        <?= $a['status']; ?>
    </td>

    <td>
        <a href="edit.php?id=<?= $a['id_agenda']; ?>">Edit</a> |
        <a href="hapus.php?id=<?= $a['id_agenda']; ?>"
           onclick="return confirm('Hapus agenda?')">Hapus</a>

        <?php if ($a['status'] == 'Belum') { ?>
            | <a href="ubah_status.php?id=<?= $a['id_agenda']; ?>"
                 onclick="return confirm('Tandai agenda sebagai selesai?')">
                 Selesai
              </a>
        <?php } ?>
    </td>
</tr>
<?php } ?>

</table>

</body>
</html>
