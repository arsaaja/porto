<?php
// Konfigurasi dasar aplikasi
define('BASE_URL', '/porto/');
define('SITE_NAME', 'Porto Setoca');
define('SITE_TAGLINE', 'Portofolio Ringkas');

// Jika nanti butuh koneksi database, aktifkan bagian ini:
/*
define('DB_HOST', 'localhost');
define('DB_NAME', 'luminous_vision');
define('DB_USER', 'root');
define('DB_PASS', '');

try {
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4", DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi database gagal: " . $e->getMessage());
}
*/
