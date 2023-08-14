<?php
include "process.php";
include "../config.php"
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        <label for="slogan_c">Slogan:</label>
        <input type="text" id="slogan_c" name="slogan_c"><br><br>

        <label for="content_c">Content:</label><br>
        <textarea id="content_c" name="content_c" rows="4" cols="50"></textarea><br><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>