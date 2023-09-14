<?php
session_start();
include("php/db_conn.php");


$state = "";
$district = "";
$blood_group = "";

if (isset($_POST['stateSel'])) {
  $state = $_POST['stateSel'];
}

if (isset($_POST['districtSel'])) {
  $district = $_POST['districtSel'];
}

if (isset($_POST['blood_group'])) {
  $blood_group = $_POST['blood_group'];
}


// Build the SQL query
$sql = "SELECT * FROM donor_details WHERE state = '$state' AND district = '$district' AND blood_group = '$blood_group'";


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Search Donor</title>
  <link rel="stylesheet" href="CSS/bootstrap.css" />
  <link rel="stylesheet" href="CSS/search.css" />
  <script src="https://kit.fontawesome.com/ae3d34b0bb.js" crossorigin="anonymous"></script>

</head>

<body>
  <div id="header">
    <div class="container">
      <nav>
        <img class="logo" id="HomePage" src="images/logo.png" alt="logo" />
        
        <div class="nav-btns">
          
          <div class="btn btn-beta" id="signUpButton">Donate Now</div>
        </div>
      </nav>
    </div>
  </div>

  <!-- -----------------Search for Donor------------------- -->
  <div id="register">
    <h1>Search a Donor</h1>
    <form action="" method="post">

      <div class="field">
        <div class="left">
          <label for="stateSel">Province</label>
          <select id="stateSel" name="stateSel" size="1" required>
            <option value="" selected="selected">Please select state</option>

          </select>
        </div>
        <div class="right province-right">
          <label for="districtSel">District</label>
          <select id="districtSel" name="districtSel" size="1" required>
            <option value="" selected="selected">
              Please select district/city
            </option>
          </select>
        </div>
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

      <button type="submit" class="btn btn-beta">Search</button>
    </form>

  </div>
  <div class="row">
    <table class="table table-sm  mt-5 table-striped table-hover">
      <thead class="bg-warning">
        <?php
        // Execute the query
        $result = $conn->query($sql);
        // Check if any records were found
        if ($result->num_rows > 0) {
          // Display the records in a table
          ?>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>State</th>
            <th>District</th>
            <th>Phone</th>
            <th>Blood Group</th>
            <th>Last Donation</th>
          </tr>
        </thead>
        <tbody>
          <?php
          while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['first_name'] . ' ' . $row['last_name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['state'] . "</td>";
            echo "<td>" . $row['district'] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            echo "<td>" . $row['blood_group'] . "</td>";
            echo "<td>" . $row['last_donation'] . "</td>";
            echo "</tr>";
          }
          ?>

          <?php

        } else {
          echo "<div class='no-records-message'>No records found.</div>";
        }

        // Close the database connection
        $conn->close();
        ?>
      </tbody>
    </table>
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
     document
    .getElementById('signUpButton')
    .addEventListener('click', function () {
      window.location.href = 'register.php';
    });
  document
    .getElementById('HomePage')
    .addEventListener('click', function () {
      window.location.href = 'logged_index.php';
    });
  </script>
<script src="js/search_donor.js"></script>
</body>

</html>