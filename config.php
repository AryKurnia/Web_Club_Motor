<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "web_motor";

$conn = new mysqli($hostname, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
// else {
//     die("Koneksi Berhasil...");
//     # code...
// }




?>