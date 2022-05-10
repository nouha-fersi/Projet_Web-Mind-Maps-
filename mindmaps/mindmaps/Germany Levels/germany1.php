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
    <title>Germany Level 1</title>
    <link rel="shortcut icon" type="image/png" href="favicon.ico" />
    <link rel="stylesheet" href="germany1.css" />
  </head>
  <body>
    <div class="img">
      <a href="../Page 4/page4.php"><img class="back" src="../back.gif" alt="Back" height="55px"
        width="55px" /></a>

        <div class="cc">
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
            <img src="germanycities.jpg" width="27%" />
          </div>
          <div>
            <h1>Guess the most known german cities</h1>
          </div>
          <div class="container">
            <div class="cube" id="berlin" test="false">
              <div class="flip">
                <span>?</span>
              </div>
              <div class="flop">
                <span>Berlin</span>
              </div>
            </div>
            <div class="cube" id="stuttgart">
              <div class="flip">
                <span>?</span>
              </div>
              <div class="flop">
                <span>Stuttgart</span>
              </div>
            </div>
            <div class="cube" id="hamburg">
              <div class="flip">
                <span>?</span>
              </div>
              <div class="flop">
                <span>Hamburg</span>
              </div>
            </div>
            <div class="cube" id="hannover">
              <div class="flip">
                <span>?</span>
              </div>
              <div class="flop">
                <span>Hannover</span>
              </div>
            </div>
            <div class="cube" id="munich">
              <div class="flip">
                <span>?</span>
              </div>
              <div class="flop">
                <span>Munich</span>
              </div>
            </div>
            <div class="cube" id="frankfurt">
              <div class="flip">
                <span>?</span>
              </div>
              <div class="flop">
                <span>Frankfurt</span>
              </div>
            </div>
            <div class="cube" id="dusseldorf">
                <div class="flip">
                  <span>?</span>
                </div>
                <div class="flop">
                  <span>Dusseldorf</span>
                </div>
              </div>
          </div>

      <a href="../germanylevels/germany2.html"
        ><img
          class="next"
          id="next"
          src="../next.png"
          height="60px"
          width="60px"
      /></a>
      <div class="rep" id="rep">
        <input type="text" placeholder="Write Here" id="answer" class="ans" />
      </div>
      <a href="../logout.php"><img
        class="logout"
        src="../logout.gif"
        alt="Back"
        height="38px"
        width="38px"
    /></a>
    </div>
  
    <script src="germany1.js"></script>
  </body>
</html>