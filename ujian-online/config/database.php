<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db   = "ujian_online";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
} else {
    // opsional, bisa dihapus kalau tidak mau tampil
    // echo "Koneksi berhasil";
}
?>
