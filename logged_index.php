<?
include("php/db_conn.php");
session_start();

if (!isset($_SESSION["email"])) {
  header("Location: login.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Donate A Life</title>
  <link rel="stylesheet" href="CSS/bootstrap.css" />
  <link rel="stylesheet" href="CSS/style.css" />
  <script src="https://kit.fontawesome.com/ae3d34b0bb.js" crossorigin="anonymous"></script>

</head>

<body>
  <div id="header">
    <div class="container">
      <nav>
        <img class="logo" id="HomePage" src="images/logo.png" alt="logo" />
        <div>
          <ul>
            <li><a href="logged_index.php">Home</a></li>
            <li><a href="#stats">Blood Donation</a></li>
            <li><a href="#services">Our Work</a></li>
            <li><a href="#about">About Us</a></li>
          </ul>
        </div>
        <div class="nav-btns">
          <div class="btn btn-alpha"><a href="php/signout.php">Sign out</a></div>
          <div class="btn btn-beta" id="profile">Donate Now</div>


        </div>
      </nav>
      <div class="header-text">
        <h1>Largest Blood Donation <br />Center Acroos <br />Pakistan</h1>
        <p>
          Each donation can help save more than one life ina second. <br />
          Every 2 second someone need blood.
        </p>
        <div class="header-text-btns">
          <div class="btn btn-alpha" id="profile2">Donate Now</div>
          <div class="btn btn-beta " id="search">Find Donor</div>
        </div>
      </div>
    </div>
  </div>

  <!-- -------------Ayat---------- -->

  <div id="ayat">
    <div class="ayat-slider-container">
      <div class="ayat-title">
        <h1>Al-Quran</h1>
        <img src="images/ayat.png" alt="" />
        <p>“Whoever saves a life is as through he had saved all mankind.”</p>
        <p class="ayat-name">( Surah Al- Ma’idah , Ayath 32)</p>
      </div>
    </div>
  </div>

  <!-- -------------Stat---------- -->
  <div id="stats">
    <div class="container counter-wrapper">
      <div class="counter">
        <h2 class="count counter-numbers" data-target="265">0</h2>
        <p class="counter-title">Clinics</p>
      </div>
      <div>
        <h2 class="count counter-numbers" data-target="1454">0</h2>
        <p class="counter-title">Blood Donors</p>
      </div>
      <div>
        <h2 class="count counter-numbers" data-target="96">0</h2>
        <p class="counter-title">Cities</p>
      </div>
    </div>
  </div>
  <!-- ---------------services-------------- -->
  <div id="services">
    <div class="container">
      <h1 class="services-heading">Services</h1>
      <p class="services-text">
        We make blood donation process a lot more simpler, now you just
        <br />need to search a clinic around you then request consultation
        <br />
        and your appointment is done.
      </p>
      <div class="services-list">
        <div>
          <img src="images/Red Cells.png" alt="" />
          <h3>Red Cells</h3>
          <p>
            We offer safe and convenient blood collection services at our
            state-of-the-art donation centers. Our trained staff will make
            sure you have a positive experience every time you donate.
          </p>
        </div>
        <div>
          <img src="images/platelets.png" alt="" />
          <h3>Platelets</h3>
          <p>
            We offer plasma separation services using the latest technology.
            Plasma is a vital component of blood that can be used to treat a
            variety of medical conditions.
          </p>
        </div>
        <div>
          <img src="images/plasma.png" alt="" />
          <h3>Plasma</h3>
          <p>
            We offer platelet donation services that are quick and easy.
            Platelets are used to help patients with blood clotting disorders
            and cancer.
          </p>
        </div>
      </div>
    </div>
  </div>
 

  <!-- ------------------About Us-------------- -->
  <div id="about">
    <div class="container">
      <h1>About Us</h1>
      <div class="about-us-row">
        <div class="about-us-left">
          <h4>Your healthy life style is our priority.</h4>
          <p>
            EACH DONATION CAN HELP SAVE MORE THAN ONE LIFE. EVERY 2 SECOUND
            SOMEONE NEED BLOOD.
          </p>
          <div class="btn btn-beta">Explore More</div>
        </div>
        <div class="about-us-right">
          <img src="images/About US.png" alt="" />
        </div>
      </div>
    </div>
  </div>

  <!-- -------------Donate-------------- -->

  <div id="donate">
    <div class="container">
      <div class="donate-items">
        <h2>Every 2 Seconds SomeOne Need Blood</h2>
        <p>
          Each Donation can help save more thn one life. <br />
          Every 2 seconds someone need blood.
        </p>
        <div class="btn btn-beta" id="profile3">Donate Now</div>
      </div>
    </div>
  </div>
  <!-- --------Contact Us------------- -->

  <div id="contact">
    <div class="container">
      <div class="row">
        <div class="contact-left">
          <h1 class="sub-title">Contact Us</h1>
          <p><i class="fas fa-paper-plane"></i>contact@example.com</p>
          <p><i class="fas fa-phone"></i>0123456789</p>
          <div class="social-icons">
            <a href="https://facebook.com/"><i class="fab fa-facebook"></i></a>
            <a href=""><i class="fab fa-twitter-square"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-linkedin"></i></a>
          </div>
        </div>
        <div class="contact-right">
          <form name="submit-to-google-sheet">
            <input type="text" name="Name" placeholder="Your Name" required />
            <input type="email" name="email" placeholder="Your Email" required />
            <textarea name="Message" rows="6" placeholder="Your Message"></textarea>
            <button type="submit" class="btn btn-beta">Submit</button>
          </form>
          <span id="msg"></span>
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

  <script>
    const scriptURL = 'https://script.google.com/macros/s/AKfycbzfx6UeJ7AKUWGl4B24HsMEpADiQ4tYi8ulFaPBUjYhH2XC8gL7h2G1orjqmVoTsYWZVw/exec'
    const form = document.forms['submit-to-google-sheet']
    const msg = document.getElementById("msg")

    form.addEventListener('submit', e => {
      e.preventDefault()
      fetch(scriptURL, { method: 'POST', body: new FormData(form) })
        .then(response => {
          msg.innerHTML = "Message Sent succesfully"
          setTimeout(function () {
            msg.innerHTML = ""
          }, 5000)
          form.reset()
        })
        .catch(error => console.error('Error!', error.message))
    })




    document
      .getElementById('profile')
      .addEventListener('click', function () {
        window.location.href = 'register.php';
      });


    document
      .getElementById('profile2')
      .addEventListener('click', function () {
        window.location.href = 'register.php';
      });

    document
      .getElementById('profile3')
      .addEventListener('click', function () {
        window.location.href = 'register.php';
      });


    document
      .getElementById('search')
      .addEventListener('click', function () {
        window.location.href = 'search_donor.php';
      });

    document
      .getElementById('HomePage')
      .addEventListener('click', function () {
        window.location.href = 'logged_index.php';
      });



    // Function to start counting animation
    function startCounting(counter) {
      const target = Number(counter.getAttribute('data-target'));
      const speed = 197;
      let count = 0;

      function updateCount() {
        const increment = target / speed;
        if (count < target) {
          count += increment;
          counter.innerText = Math.floor(count);
          requestAnimationFrame(updateCount);
        } else {
          counter.innerText = target;
        }
      }

      updateCount();
    }

    // Intersection Observer setup
    const countingElements = document.querySelectorAll('.count');
    const options = {
      root: null, // Use the viewport as the root
      rootMargin: '0px', // No margin
      threshold: 0.5, // Trigger when 50% of the element is visible
    };

    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          startCounting(entry.target);
          observer.unobserve(entry.target); // Stop observing once the animation starts
        }
      });
    }, options);

    // Start observing each counting element
    countingElements.forEach(element => {
      observer.observe(element);
    });
  </script>
  <!-- <script src="/js/logged_index.js"></script> -->
</body>

</html>