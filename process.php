<?php
include "config.php";

$sql = "SELECT title, club_name, katPengantar_s, katPengantar_c, about_s, about_c, visiMisi_v, visiMisi_m, profile_c, produk_c, event_c FROM settings WHERE id = 'K1'"; // Mengambil data dengan id tertentu
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $title = $row["title"];
    $clubName = $row["club_name"];
    $katPengantarS = $row["katPengantar_s"];
    $katPengantarC = $row["katPengantar_c"];
    $aboutS = $row["about_s"];
    $aboutC = $row["about_c"];
    $visiMisiV = $row["visiMisi_v"];
    $visiMisiM = $row["visiMisi_m"];
    $profileC = $row["profile_c"];
    $produkC = $row["produk_c"];
    $eventC = $row["event_c"];
}
?>