<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "web_motor";

$conn = new mysqli($hostname, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $title = $_POST["title"];
    $clubName = $_POST["club_name"];
    $katPengantarS = $_POST["katPengantar_s"];
    $katPengantarC = $_POST["katPengantar_c"];
    $aboutS = $_POST["about_s"];
    $aboutC = $_POST["about_c"];
    $visiMisiV = $_POST["visiMisi_v"];
    $visiMisiM = $_POST["visiMisi_m"];
    $profileC = $_POST["profile_c"];
    $produkC = $_POST["produk_c"];
    $eventC = $_POST["event_c"];

    // Update data di database
    $sql = "UPDATE settings SET 
            title='$title', 
            club_name='$clubName', 
            katPengantar_s='$katPengantarS', 
            katPengantar_c='$katPengantarC', 
            about_s='$aboutS', 
            about_c='$aboutC', 
            visiMisi_v='$visiMisiV', 
            visiMisi_m='$visiMisiM', 
            profile_c='$profileC', 
            produk_c='$produkC', 
            event_c='$eventC' 
            WHERE id='K1'";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil diubah.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>