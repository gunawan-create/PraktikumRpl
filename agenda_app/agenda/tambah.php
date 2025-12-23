<!DOCTYPE html>
<html>
<head>
    <title>Tambah Agenda</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<div class="container">
<h2>Tambah Agenda</h2>
<form action="simpan.php" method="post">
    <input type="text" name="judul" placeholder="Judul Agenda" required>
    <input type="date" name="tanggal" required>
    <input type="time" name="waktu_mulai" required>
    <select name="prioritas">
        <option>Sedang</option>
        <option>Rendah</option>
        <option>Tinggi</option>
    </select>
    <button type="submit">Simpan</button>
</form>
</div>

</body>
</html>
