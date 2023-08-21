<?php
// Mulai sesi
session_start();

// Hapus semua data sesi
session_destroy();

// Redirect ke halaman login atau halaman utama
header("Location: login.php"); // Ganti dengan URL halaman login atau halaman utama Anda
exit;
?>
