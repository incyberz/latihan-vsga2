<?php
$is_login = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CV Online</title>
  <link rel='stylesheet' href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style_saya.css">
  <script src="js/jquery.min.js"></script>
  <style>
    .container{
      background: linear-gradient(#eee,#afa);
      min-height: 100vh;
      font-family: 'Century Gothic'
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>PHP Routing</h1>

    <?php include 'include/foto_saya.php'; ?>
    <?php include 'nav.php'; ?>
    <?php include 'routing.php'; ?>

  </div>
</body>
</html>