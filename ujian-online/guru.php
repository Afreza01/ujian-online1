<?php
session_start();

// cek apakah sudah login & role = guru
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'guru') {
    header("Location: index.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Guru</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <div class="dashboard">
        <h1>Selamat Datang, Guru!</h1>
        <p>Halo <b><?php echo $_SESSION['role']; ?></b>, Anda berhasil login ke sistem ujian online.</p>

        <ul>
            <li><a href="#">📄 Kelola Soal Ujian</a></li>
            <li><a href="#">👨‍🎓 Lihat Daftar Siswa</a></li>
            <li><a href="#">📊 Laporan Hasil Ujian</a></li>
            <li><a href="index.php?action=logout">🚪 Logout</a></li>
        </ul>
    </div>
</body>
</html>
