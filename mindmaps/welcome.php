<?php 
include 'config.php';
session_start();
require 'global.php';
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
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/png" href="favicon.png" />
        <link rel="stylesheet" href="style.css"/>
        <title>Mind Maps</title>
    </head>
    <body>
        <div class="img">
            <a href="logout.php">Logout</a>
            <div class="logo">
                <img src="logo1.png" width="350px" />
            </div>
            <div class="div2">
                <?php echo "<h1 class='div2'>Welcome " . $_SESSION['username'] . "</h1>"; ?>
            </div>
            <div class="div1">
                <button class="PlayBtn" onclick="window.location.href='./Page 2/page2.php'">Play</button>
            </div>
        </div>
    </body>
</html>