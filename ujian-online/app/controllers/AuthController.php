<?php
require_once __DIR__ . '/../models/User.php';

class AuthController {
    public function loginPage() {
        include __DIR__ . '/../views/auth/login.php';
    }

    public function login($conn) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $user = User::findByUsername($conn, $username);

        if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['role']    = $user['role'];
    $_SESSION['nama']    = $user['nama']; // 🔥 simpan nama ke session
            if ($user['role'] == 'guru') {
                header("Location: guru.php");
            } elseif ($user['role'] == 'siswa') {
                header("Location: siswa.php");
            } else {
                header("Location: admin.php");
            }
            exit;
        } else {
            echo "<script>alert('Username atau password salah!');window.location='index.php';</script>";
        }
    }

    public function logout() {
        session_destroy();
        header("Location: index.php");
    }
}
