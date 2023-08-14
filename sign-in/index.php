<?php
include "../config.php";
include "process_login.php";
include "../process.php";
?>


<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <link rel="shortcut icon" href="../img/logo.png">
  <meta name="generator" content="Hugo 0.115.4">
  <title>
    <?php echo $title; ?>
  </title>

  <link href="../bootstrap-5.3.1/css/bootstrap.css" rel="stylesheet">
  <link href="sign-in.css" rel="stylesheet">


  <!-- Custom styles for this template -->
  <link href="sign-in.css" rel="stylesheet">
</head>

<body class=" py-4 bg-body-tertiary">
  <main class="form-signin w-100 m-auto">
    <form action="process_login.php" method="post">
      <img class="mb-4" src="../img/logo.png" alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">Sign in</h1>

      <div class="form-floating">
        <input type="text" class="form-control" id="floatingUserName" name="floatingUserName">
        <label for="floatingUserName">User Name</label>
      </div>
      <div class="form-floating">
        <input name="floatingPassword" type="password" class="form-control" id="floatingPassword"
          placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
      <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
    </form>
  </main>
  <script src="../bootstrap-5.3.1/js/bootstrap.js"></script>

</body>

</html>