<?php 
include '../config.php';
session_start();
require '../global.php';
echo $url;
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$nom=$_SESSION['username'];
$sql = "UPDATE users
SET url= '$url'
WHERE username='$nom'";
$result = mysqli_query($conn, $sql);
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mind Maps</title>
    <link rel="shortcut icon" type="image/png" href="../favicon.png" />
    <link rel="stylesheet" href="page4.css" />
  </head>
  <body>
    <div class="img">
      <a href="../Page 3/page3.php"><img class="back" src="../back.gif"  alt="Back" height="55px" width="55px" /></a>
      <div class="logo">
        <img src="../logo1.png" width="200px" />
      </div>
      <a class="btn0">LET'S BEGIN !</a>
      <img class="trait" src="../page2trait.png" width="85%"  />
      <a class="country1" href="../Spain Levels/Level1.html">SPAIN</a>
      <a class="country2" href="../Italy Levels/italy1.html">ITALY</a>
      <a class="country3" href="../Egypt Levels/egypt1.html">EGYPT</a>
      <a class="country4" href="../Germany Levels/germany1.html">GERMANY</a>
      <a class="country5" href="../Japan Levels/Level1.html">JAPAN</a>
      <a class="country6" href="../USA Levels/usa 1.html">USA</a>
      <div><a class="logout" href="../logout.php">logout </a></div>
    </div>
  </body>
</html>