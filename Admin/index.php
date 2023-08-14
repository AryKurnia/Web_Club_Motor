<?php
// include "process.php";
// include "../process.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>
        <?php echo $title; ?>
    </title>
</head>

<body>
    <h1>Admin Panel</h1>
    <form action="process.php" method="post">

        <label for="title">Title:</label>
        <input type="text" id="title" name="title"><br><br>

        <label for="club_name">Club Name:</label>
        <input type="text" id="club_name" name="club_name"><br><br>

        <label for="katPengantar_s">Kata pengantar Slogan:</label>
        <input type="text" id="katPengantar_s" name="katPengantar_s"><br><br>

        <label for="katPengantar_c">Kata pengantar Content:</label><br>
        <textarea id="katPengantar_c" name="katPengantar_c" rows="4" cols="50"></textarea><br><br>

        <label for="about_s">About Slogan:</label>
        <input type="text" id="about_s" name="about_s"><br><br>

        <label for="about_c">About Content:</label><br>
        <textarea id="about_c" name="about_c" rows="4" cols="50"></textarea><br><br>

        <label for="visiMisi_v">Visi:</label><br>
        <textarea id="visiMisi_v" name="visiMisi_v" rows="4" cols="50"></textarea><br><br>

        <label for="visiMisi_m">Misi:</label><br>
        <textarea id="visiMisi_m" name="visiMisi_m" rows="4" cols="50"></textarea><br><br>

        <label for="profile_c">Profil Content:</label><br>
        <textarea id="profile_c" name="profile_c" rows="4" cols="50"></textarea><br><br>

        <label for="produk_c">Produk Content:</label><br>
        <textarea id="produk_c" name="produk_c" rows="4" cols="50"></textarea><br><br>

        <label for="event_c">Even Content:</label><br>
        <textarea id="event_c" name="event_c" rows="4" cols="50"></textarea><br><br>


        <input type="submit" value="Submit">
    </form>
</body>

</html>