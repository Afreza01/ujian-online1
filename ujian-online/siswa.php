<?php
session_start();

// cek apakah sudah login & role = siswa
if (!isset($_SESSION['user_id']) || strtolower($_SESSION['role']) != 'siswa') {
    header("Location: index.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Siswa</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <div class="dashboard">
        <h1>Selamat Datang, <?php echo $_SESSION['nama']; ?></h1>
<p>Halo <b><?php echo $_SESSION['nama']; ?></b>, Anda berhasil login sebagai <b><?php echo $_SESSION['role']; ?></b>.</p>

        <ul>
            <li><a href="#">📝 Ikuti Ujian</a></li>
            <li><a href="#">📊 Lihat Nilai</a></li>
            <li><a href="index.php?action=logout">🚪 Logout</a></li>
        </ul>
    </div>
</body>
</html>
