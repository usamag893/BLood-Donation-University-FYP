<?php

include("php/db_conn.php");
session_start();


if($_SERVER['REQUEST_METHOD'] =="POST"){
  $email=$_POST['email'];
  $pwd=$_POST['pwd'];
  if( !empty($email) && !empty($pwd)){
    $query="select * from users where email='$email' limit 1";
    $result= mysqli_query($conn,$query);
    if($result){
      if($result && mysqli_num_rows($result)>0){
        $user_data = mysqli_fetch_assoc($result);
        if($user_data['pwd']== $pwd)
        $_SESSION['email'] = $email;
        {
          header("location:logged_index.php");
          die;
        }
      }
    }
    echo"<script type='text/javascript'>alert('wrong username or password')</script>";
  }
  else{
    echo"<script type='text/javascript'>alert('wrong username or password')</script>";
  }

}
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>login</title>
    <link rel="stylesheet" href="CSS/bootstrap.css" />
    <link rel="stylesheet" href="CSS/login.css" />
    <script
      src="https://kit.fontawesome.com/ae3d34b0bb.js"
      crossorigin="anonymous"
    ></script>
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

    <!-- -----------------register------------------- -->
    <div id="login">
      <div class="container">
        <div class="login-divide">
          <div class="left">`
           
          </div>
          <div class="right">
            <form method="post">
              <h3>LOGIN</h3>
              

              
              <div class="field">
                <label for="email">Email</label>
                <input
                  class="email"
                  id="email"
                  type="email"
                  placeholder="Email Address"
                  name="email" 
                 
                  required
                />
              </div>
              <div class="field">
                <label for="password">Password</label>
                <input
                  class="password"
                  id="password"
                  type="password"
                  autocomplete="alpha"
                  placeholder="Enter Your Password"
                  name="pwd"
                  required
                />
              </div>

              <button type="submit" class="btn btn-beta">Login</button>
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
              <a href="https://facebook.com/"
                ><i class="fab fa-facebook"></i
              ></a>
              <a href=""><i class="fab fa-twitter-square"></i></a>
              <a href=""><i class="fab fa-instagram"></i></a>
              <a href=""><i class="fab fa-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      document
        .getElementById('loginButton')
        .addEventListener('click', function () {
          window.location.href = 'login.php';
        });
      document
        .getElementById('signUpButton')
        .addEventListener('click', function () {
          window.location.href = 'signup.php';
        });
        document
        .getElementById('HomePage')
        .addEventListener('click', function () {
          window.location.href = 'index.html';
        });
    </script>
  </body>
</html>
