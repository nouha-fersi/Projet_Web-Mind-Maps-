<?php 
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
require 'global.php';
include 'config.php';
session_start();
error_reporting(0);

global $sql;
if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}
if (isset($_POST['submit'])) {
	$emaill = $_POST['emaill'];
	$passwordd = md5($_POST['passwordd']);
	$sql = "SELECT * FROM users WHERE email='$emaill' AND password='$passwordd'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username']; 
    $sql = "SELECT url FROM users WHERE email='$emaill'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $url =$row["url"];
  }
} else {
  echo "0 results";
}
$conn->close();
    if ($url =='')
    header("Location:welcome.html");
    else
    header('location:'.$url);
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}


include 'config.php';

error_reporting(0);

session_start();

/*if (isset($_SESSION['username'])) {
    header("Location: index.php");
}*/

if (isset($_POST['register'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password,url)
					VALUES ('$username', '$email', '$password','$url')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		}
     else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
	} 
  else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
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
      <img src="./logo1.png" width="350px" />
    </div>
    <div class="div1">
      <button class="PlayBtn" onclick="window.location.href='./Page 2/page2.html'">Play</button>
      <button class="GuideBtn" id="gg">Guide</button>
      <button class="LoginBtn"  id="myBtn">Login </button>
      <button class="CreditsBtn" id="crd">Credits</button>
    </div>

    <div id="myModal" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <div class="tab">
          <div class="tablinks" id="logintab" data-form-id="login">Login</div>
          <div class="tablinks" id="signuptab" data-form-id="signup">Sign up</div>
        </div>
        <div class="tabcontent" id="login">
          <form action="" method="POST" class="login-email">
            <div class="input-group">
              <input class="input-field" type="email" placeholder="Enter your email" name="emaill" value="<?php echo $emaill; ?>" required>
            </div>
            <div class="input-group">
              <input class="input-field" type="password" placeholder="Enter your password" name="passwordd" value="<?php echo $_POST['passwordd']; ?>" required>
            </div>
            <div class="checkbox-text">
              <div class="checkbox-content">
                <input type="checkbox" id="ossm" name="ossm">
                <label for="ossm">Remember me</label>
              </div>
              <a href="#" class="text">Forgot password?</a>
            </div>
            <div class="input-group">
              <button name="submit" class="btn">Login</button>
            </div>
          </form>
          <div class="login-signup">
            <span class="text">Not a member?</span>
            <div class="tablinks" data-form-id="signup" id="signuptab">Signup now !</div>
          </div>
        </div>

        <div class="tabcontent" id="signup">
          <form action="" method="POST" class="login-email">
            <div class="input-group">
              <input class="input-field" type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
            </div>
            <div class="input-group">
              <input class="input-field" type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
              <input class="input-field" type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
              <input class="input-field" type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
            </div>
            <div class="input-group">
              <button name="register" class="btn">Register</button>
            </div>
            <div class="login-signup">
              <span class="text">Have an account?</span>
              <div class="tablinks" id="logintab" data-form-id="login">Login now !</div>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div id="guide" class="guide">
      <div class="guide-content">
        <span class="close">&times;</span>
        <p>MIND MAPS is a game which contains 25 levels : each level is about a question with multiple answers 
            concerning some informations about a country. User should guess all this answers to win. 
        </p>
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

  </div>
  <script src="page1.js"></script>
</body>
</html>