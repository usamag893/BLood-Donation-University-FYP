<?php
session_start();
include("php/db_conn.php");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $gender=$_POST["gender"];
  $address = $_POST["address"];
  $age = $_POST["age"];
  $bloodGroup = $_POST["blood_group"];
  $state = $_POST["stateSel"];
  $district = $_POST["districtSel"];
  $pin = $_POST["pin"];
  $last_donation = $_POST["last_donation"];



  if (
    !empty($fname) && !empty($lname) && !empty($phone) && !empty($email)
    && !empty($address) && !empty($age) && !empty($bloodGroup)
    && !empty($state) && !empty($district) && !empty($pin)
   
  ) {
    $query = "insert into donor_details (first_name,last_name,phone,email,gender,address,age,
    blood_group,state, district,pin,last_donation) values ('$fname','$lname','$phone',
    '$email','$gender','$address','$age','$bloodGroup','$state','$district','$pin','$last_donation')";
    mysqli_query($conn, $query);
    echo "<script type='text/javascript'>alert('succesfully entered')</script>";
    header("location:logged_index.php");
    exit;
  } else {
    echo "<script type='text/javascript'>alert('You Missed Something')</script>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register</title>
  <link rel="stylesheet" href="CSS/bootstrap.css" />
  <link rel="stylesheet" href="CSS/register.css" />
  <script src="https://kit.fontawesome.com/ae3d34b0bb.js" crossorigin="anonymous"></script>
  
</head>

<body>
  <div id="header">
    <div class="container">
      <nav>
        <img class="logo" id="HomePage" src="images/logo.png" alt="logo" />
        
        <div class="nav-btns">
          <div class="btn btn-beta" id="loginButton">Search Donor</div>
          
        </div>
      </nav>
    </div>
  </div>


  <!-- -----------------register------------------- -->
  <div id="register">
    <h1>Register as Donor</h1>
    <form action="" method="post">
      <div class="field">
        <label for="FullName">Full Name</label>
        <div class="input-field">
          <input type="text" name="fname" placeholder="First Name" id="" />
          <input type="text" name="lname" placeholder="Last Name" id="" />
        </div>
      </div>

      <div class="field">
        <label for="Phone">Phone Number</label>
        <input class="phone" id="phone" type="text" name="phone" placeholder="Contact Number" />
      </div>
      <div class="field">
        <label for="email">Email</label>
        <input class="email" type="email" id="email" name="email" placeholder="Email Address" />
      </div>
      <div class="gender field">
        <label>Gender</label>
        <div>
          <label class="label-gndr" for="male">Male</label>
          <input type="radio" id="male" name="gender" value="male">
        </div>
        <div>
          <label class="label-gnder" for="female">Female</label>
          <input type="radio" id="female" name="gender" value="female">
        </div>

      </div>
      <div class="field">
        <div class="left">
          <label for="Address">Address</label>
          <textarea name="address" id="address" cols="30" rows="10" placeholder="Type Your Address"></textarea>
        </div>
        <div class="right">
          <div class="field">
            <label for="age">Age</label>
            <input type="text" id="age" name="age" placeholder="Type Your Age" />
          </div>
          <div class="field">
            <label for="blood">Blood Group</label>
            <select name="blood_group" id="blood">
              <option value="A+">A+</option>
              <option value="A-">A-</option>
              <option value="B+">B+</option>
              <option value="B-">B-</option>
              <option value="AB+">AB+</option>
              <option value="AB-">AB-</option>
              <option value="O+">O+</option>
              <option value="O-">O-</option>
            </select>
          </div>
        </div>
      </div>
      <div class="field">
        <div class="left ">
          <label for="stateSel">Province</label>
          <select id="stateSel" name="stateSel" size="1" required>
            <option value="" selected="selected">Please select state</option>
          </select>
        </div>
        <div class="right province-right">
          <label for="districtSel">District</label>
          <select id="districtSel" name="districtSel" size="1" required>
            <option value="" selected="selected">Please select district/city</option>
          </select>
        </div>
      </div>
      <div class="field">
        <label for="Pin">Pin Code</label>
        <input type="text" name="pin" id="pin" placeholder="Enter Your Pin Code" />
      </div>
      <div class="check field">
        <label for="donation">Have you ever donated blood in the past?
        </label>

        <input type="checkbox" id="yesCheckbox" name="donation" value="yes" onchange="toggleDateInput()"> YES
        <input type="checkbox" id="noCheckbox" name="donation" value="no" onchange="toggleDateInput()"> NO
      </div>

      <div class="field last-donation" id="dateInput">
        <label for="last_Donation">Last Donation</label>
        <input type="date" name="last_donation" id="last_Donation" placeholder="Last Donation" />
      </div>
      
      <button type="submit" id="submitButton" class="btn btn-beta">Submit</button>
    </form>
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
<script>
  
</script>
  <script src="js/register.js"></script>
</body>

</html>