<?php
session_start();

require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/app/controllers/AuthController.php';

$auth = new AuthController();

// routing sederhana
$action = $_GET['action'] ?? '';

switch ($action) {
    case 'login':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $auth->login($conn);
        } else {
            $auth->loginPage();
        }
        break;

    case 'logout':
        $auth->logout();
        break;

    case 'loginPage':
        $auth->loginPage();
        break;

    default:
        // tampilkan halaman home
        require 'home.php';
        break;
}
