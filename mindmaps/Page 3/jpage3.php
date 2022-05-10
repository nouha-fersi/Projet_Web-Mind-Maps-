<?php 
include '../config.php';
session_start();
require '../global.php';
echo $url;
echo("<script src='page3.js'>document.writeln(abc);</script>");
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
    <link rel="stylesheet" href="page3.css" />
  </head>

  <body>
    <div class="img">
    
    <a href="../Page 2/page2.php">
        <img
          class="back"
          src="../back.gif"
          alt="Back"
          height="55px"
          width="55px"
          style="float = right;"
      /></a>
      <div>
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player
          src="https://assets1.lottiefiles.com/packages/lf20_5upjwxvm.json"
          background="transparent"
          speed="0.8"
          style="width: 80%; height: 70%"
          autoplay
          loop
          id="win"
        ></lottie-player>
      </div>

      <div class="worldmap">
        <img src="../worldmap.jpg" width="60%" />
      </div>

      <div>
        <h1>Guess the countries !</h1>
      </div>

      <div class="container">
        <div class="cube" id="usa">
          <div class="flip">
            <span>?</span>
          </div>
          <div class="flop">
            <span>USA</span>
          </div>
        </div>
        <div class="cube" id="germany">
          <div class="flip">
            <span>?</span>
          </div>
          <div class="flop">
            <span>Germany</span>
          </div>
        </div>
        <div class="cube" id="italy">
          <div class="flip">
            <span>?</span>
          </div>
          <div class="flop">
            <span>Italy</span>
          </div>
        </div>
        <div class="cube" id="spain">
          <div class="flip">
            <span>?</span>
          </div>
          <div class="flop">
            <span>Spain</span>
          </div>
        </div>
        <div class="cube" id="egypt">
          <div class="flip">
            <span>?</span>
          </div>
          <div class="flop">
            <span>Egypt</span>
          </div>
        </div>
        <div class="cube" id="japan">
          <div class="flip">
            <span>?</span>
          </div>
          <div class="flop">
            <span>Japan</span>
          </div>
        </div>
      </div>
      <a href="../Page 4/page4.php"
        ><img id="next" src="../next.png" height="60px" width="60px"
      /></a>
      <div class="rep" id="rep">
        <input type="text" placeholder="Write Here" id="answer" class="ans" />
      </div>
      <div id="winPopup" class="winPopup">
        <div class="win-content">
          <p>Congratulations 🎉 </p>
           <p>Your Score : <span id="scoreDisplay"></span> </p>  
           <p>Total Tries : <span id="totalTries"></span> </p>

           <a href="page3.html"
        ><img id="reload" src="../reloading.png" height="50px" width="50px"
      /></a>

           <a href="../Page 1/page1.html"
        ><img id="home" src="../home.png" height="65px" width="60px"
      /></a>

           <a href="../Page 4/page4.html"
        ><img id="next" src="../next.png" height="60px" width="60px"
      /></a>
        </div>
      </div>

    </div>
    
     <!-- <a href="../logout.php"><img
          class="logout"
          src="../logout.gif"
          alt="Back"
          height="38px"
          width="38px"
      /></a> 
    </div>-->


    <script src="page3.js"></script>
  </body>
</html>
