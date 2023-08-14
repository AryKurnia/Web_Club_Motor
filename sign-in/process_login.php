<?php
// Mulai sesi
session_start();

// Sertakan file konfigurasi
include "../config.php";

// Ambil data dari form 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName = $_POST['floatingUserName'];
    $password = $_POST['floatingPassword'];


    // Query untuk memeriksa userName di basis data
    $query = "SELECT * FROM login WHERE user_name = '$userName'";
    $result = mysqli_query($conn, $query);

    // Memeriksa hasil query
    if ($result && mysqli_num_rows($result) === 1) {
        // Login berhasil
        $user = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $user['id_user']; // Menggunakan 'id_user' sebagai kunci

        // Alihkan ke halaman setelah login berhasil
        header("Location: ../index.php");
        exit();
    } else {
        // Login gagal
        echo "Login gagal. Cek kembali userName dan password Anda.";
    }
}

// Tutup koneksi
mysqli_close($conn);
?>