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
    $title = $_POST["title"];
    $clubName = $_POST["club_name"];
    $sloganC = $_POST["slogan_c"];
    $contentC = $_POST["content_c"];

    $sql = "UPDATE settings SET title='$title', club_name='$clubName', slogan_c='$sloganC', content_c='$contentC' WHERE id='K1'";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil diubah.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>