<?php
include "../config.php";

// Mulai sesi
session_start();

// Sertakan file konfigurasi
include "config.php";

// Ambil data dari form
$email = $_POST['email'];
$password = $_POST['password'];

// Query untuk memeriksa email dan password di basis data
$query = "SELECT id, email FROM users WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($conn, $query);

// Memeriksa hasil query
if (mysqli_num_rows($result) === 1) {
    // Login berhasil
    $user = mysqli_fetch_assoc($result);
    $_SESSION['user_id'] = $user['id'];

    // Alihkan ke halaman setelah login berhasil
    header("Location: dashboard.php");
    exit();
} else {
    // Login gagal
    echo "Login gagal. Cek kembali email dan password Anda.";
}

// Tutup koneksi
mysqli_close($conn);



?>