<?php
session_start();

include("php/db_conn.php");



if ($_SERVER['REQUEST_METHOD'] == "POST") {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $pwd = $_POST['pwd'];
  $cnfrm_pwd = $_POST['cnfrm_pwd'];

  if (
    !empty($name) && !empty($email) && !empty($pwd) &&
    !empty($cnfrm_pwd) && !is_numeric($email) && !is_numeric($name)
  ) {
    $query = "insert into users(name,email,pwd) values('$name','$email','$pwd')";
    mysqli_query($conn, $query);
    echo "<script type='text/javascript'>alert('Succesfuly Registered')</script>";
    header("Location: login.php");
    exit;

  } else {
    echo "<script type='text/javascript'>alert('Please Enter Valid Information')</script>";

  }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>signup</title>
  <!-- <link rel="stylesheet" href="CSS/bootstrap.css" /> -->
  <link rel="stylesheet" href="CSS/signup.css" />
  <script src="https://kit.fontawesome.com/ae3d34b0bb.js" crossorigin="anonymous"></script>
</head>

<body>
  <div id="header">
    <div class="container">
      <nav>
        <img class="logo"  src="images/logo.png" alt="logo" />

        <div class="nav-btns">
          <div class="btn btn-alpha" id="loginButton">Login</div>
          <div class="btn btn-beta" id="signUpButton">Sign Up</div>
        </div>
      </nav>
    </div>
  </div>

  <!-- -----------------Sign Up------------------- -->
  <div id="signup">
    <div class="container">
      <div class="login-divide">
        <div class="left">`</div>
        <div class="right">
          <form method="post">
            <h3>Sign Up</h3>
            <div class="field">
              <label for="name">Name</label>
              <input type="text" id="name" name="name" required />
            </div>

            <div class="field">
              <label for="email">Email</label>
              <input class="email" id="email" type="email" placeholder="Email Address" name="email" required />
            </div>
            <div class="field">
              <label for="password">Password</label>
              <input class="password" id="password" type="password" autocomplete="alpha"
                placeholder="Enter Your Password" name="pwd" required />
            </div>
            <div class="field">
              <label for="cnfrm-password">Confirm Password</label>
              <input class="password" id="cnfrm-password" type="password" autocomplete="bravo"
                placeholder="Confirm Your Password" name="cnfrm_pwd" onfocusout="checkPassword()" />
              <p id="message" style="display: none;"></p>
            </div>

            <div class="checkbox">
              <label for="agreeCheckbox">
                <input type="checkbox" id="agreeCheckbox" required />
                I agree to the terms and conditions
              </label>
            </div>

            <input type="submit" class="btn btn-beta" id="btn-submit" value="Submit" />
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- -------------footer------------ -->
  
  <div id="footer">
    <div class="container">
      <div class="footer-list">
        <div class="footer-col">
          <h4>
            <img src="images/logo1.png" alt="" />
          </h4>
        </div> 
        <div class="footer-col">
          <h4>Learn Now</h4>
          <ul>
            <li><a href="">About US</a></li>
        
            <li><a href="">Environment</a></li>
      
            <li><a href="">Privacy Policy</a></li>
            <li><a href="">Contact Us</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Donation</h4>
          <ul>
            <li><a href="">Cells Donation</a></li>
            <li><a href="">R+ BHV</a></li>
            <li><a href="">O-</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Contact</h4>
          <ul>
            <li><a href="">Donation: 123-456-789</a></li>
            <li><a href="">Office: 123-456-789</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Follow Us</h4>
          <div class="social-links">
            <a href="https://facebook.com/"><i class="fab fa-facebook"></i></a>
            <a href=""><i class="fab fa-twitter-square"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="JS/script.js"></script>
</body>

</html>