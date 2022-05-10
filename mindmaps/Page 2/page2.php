<?php 
include '../config.php';
session_start();
require '../global.php';
echo $url;
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
 // Outputs: Full URL
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
    <link rel="stylesheet" href="page2.css" />
  </head>

  <body>
    <div class="img">
      <a href="../welcome.php"
        ><img
          class="back"
          src="../back.gif"
          alt="Back"
          height="55px"
          width="55px"
      /></a>
      <div class="logo">
        <img src="../logo1.png" width="200px" />
      </div>
      <a class="btn0" href="../Page 3/page3.html">LET'S BEGIN !</a>
      <img class="trait" src="../page2trait.png" width="70%" />
      <a class="country1">?</a>
      <a class="country2">?</a>
      <a class="country3">?</a>
      <a class="country4">?</a>
      <a class="country5">?</a>
      <a class="country6">?</a>
    </div>
    
  </body>
</html>
