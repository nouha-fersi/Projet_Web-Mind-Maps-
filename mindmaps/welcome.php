<?php 
include 'config.php';

session_start();
include 'welcome.html';
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
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <title>Mind Maps</title>
  <link rel="shortcut icon" type="image/png" href="favicon.png" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="img">
  
  
    <div class="logo">
   
      <img src="logo1.png" width="350px" />
    </div>

    <div class="div1">
      <button class="PlayBtn" onclick="window.location.href='./Page 2/page2.html'">Play</button>
      <button class="GuideBtn" id="gg">Guide</button>
      <button class="LoginBtn" id="myBtn" style="
 padding-left: 35px;
  padding-right: 65px;">Logout</button>
      <button class="CreditsBtn" id="crd">Credits</button>
    </div>
   <div id="myModal" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
       <?php echo "<h1>hello  " . $_SESSION['username'] . "</h1>"; ?>   
       <button class="LoginBtn" onclick="window.location.href='logout.php'" >Log out</button>
          <p>Hope you enjoy it ! &#128521 </p>

      </div>
    </div>

    <div id="guide" class="guide">
      <div class="guide-content">
        <span class="close">&times;</span>
          <p>MIND MAPS is a game which contains 25 levels : each level is about a question with multiple answers 
            concerning some informations about a country. User should guess all this answers to win. </p>
          <p>Let's go ! &#127758 </p>
         <p>Hope you enjoy it ! &#128521 </p> 
      </div>
    </div>

    <div id="credits" class="credits">
      <div class="credits-content">
        <span class="close">&times;</span>
        <p style="text-align: center;">This project was made by the efforts of our team :</p>
        <p>- Mohamed Aziz Bouachour</p>
        <p>- Emna Sellami</p>
        <p>- Nouha Fersi</p>
        <p style="text-align: center;">Supervised by our teacher :</p>
        <p style="text-align: center;">Mrs. Yemna Sayeb</p>
        <br>
        <p style="text-align: center;">All right reserved &#x24B8</p>
      </div>
    </div>
    <form method="get" name="form" action="">
        <input type="hidden"  placeholder="Enter Data" name="data" value="44">
    </form>
<?php
//$r = $_GET['data'];
//echo $r ;
//$z=$r + 5;
//$sql = "UPDATE users
//SET score='$z'
//// $nom=$_SESSION['username'];
//$sql = "UPDATE users
//SET score='$z'
//WHERE username='$nom'";
//$result = mysqli_query($conn, $sql);
?>


    <script src="page1.js"></script>
</body>
</html>