<?php

session_start();
if (!isset($_SESSION['email'])) {
    header("location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./main.css">
</head>
<body>
    <div>
      <h1>Hi<span><?= $_SESSION['name']; ?></span></h1>
      <button onclick="window.location.href='logout.php'">logout</button>
    </div>


  <dialog>
    <img src="./assets/Ellipse 2.jpg" alt="">

    <h3>Dggtgtwight <br> <span class="date">October 30, 2017</span></h3>
  </dialog>
</body>
</html>