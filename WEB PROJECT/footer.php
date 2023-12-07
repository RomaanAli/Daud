
  <!-- Footer Section -->
  <footer class="section__container footer__container">
    <span class="bg__blur"></span>
    <span class="bg__blur footer__blur"></span>
    <!-- Footer columns -->
    <div class="footer__col">
      <!-- Footer logo and description -->
      <div class="footer__logo"><img src="assets/logo.png" alt="logo" /></div>
      <p>
        Take the first step towards a healthier, stronger you with our
        unbeatable pricing plans. Let's sweat, achieve, and conquer together!
      </p>
      <!-- Social media links -->
      <div class="footer__socials">
        <a href="#"><i class="ri-facebook-fill"></i></a>
        <a href="#"><i class="ri-instagram-line"></i></a>
        <a href="#"><i class="ri-twitter-fill"></i></a>
      </div>
    </div>
    <!-- Links to various sections -->

    <div class="address-link">
      <div class="footer__col-address">
        <h4><i class="fa-solid fa-location-dot"></i>Address</h4>
        <div class="footer-col-address-para">
          <p>5th Floor, Amanah Mall, Model Town Link Rd, Muhammadpura, Lahore, Punjab 54700</p>
        </div>

      </div>
    </div>
    <div class="footer__col">
      <h4><i class="fa-solid fa-address-card"></i>About Us</h4>
      
      <a href="about.html">About Us</a>
      <a href="bmi.html">BMI Calculator</a>
	<?php
  if (isset($_SESSION['logged_in'])) {
      echo '<a href="update_account.php">Update Account</a>';
      echo '<a href="delete_account.php">Delete Account</a>';
  }
  ?>

  

    </div>
    <div class="footer__col">
      <h4><i class="fa-solid fa-phone-volume"></i>Contact</h4>
      <a href="contactUs.html">Contact Us</a>
      <a href="privacy.html">Privacy Policy</a>
      <a href="terms&condtion.html">Terms & Conditions</a>
    </div>
  </footer>
  
   <script>


	<?php 
	if( isset( $_SESSION['logged_in'] ) ){ ?>
	 document.getElementById("logountButton").addEventListener("click", function () {
      // Redirect to the specified URL when the button is clicked
      window.location.href = "logout.php";
    });
	<?php } 
	else if( isset( $_SESSION['registerd'] ) ){ ?>
	 document.getElementById("LogInButton").addEventListener("click", function () {
      // Redirect to the specified URL when the button is clicked
      window.location.href = "login.php";
    });
	
	<?php } 
	else if( !isset($_SESSION['logged_in']) ){ ?>
    // Add an event listener to the button
    document.getElementById("RegisterInButton").addEventListener("click", function () {
      // Redirect to the specified URL when the button is clicked
      window.location.href = "register.php";
    });
	<?php } 
	else {
		// nothing here
	}
	?>
	

    // Add an event listener to the button
    document.getElementById("JoinUsButton").addEventListener("click", function () {
      // Redirect to the specified URL when the button is clicked
      window.location.href = "plan.html";
    });
	
	 document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("registrationForm").addEventListener("submit", function() {
                document.getElementById("registerButton").style.display = "none";
            });
        });
	
	
	
	$(document).ready(function () {
      $("#loginForm").submit(function (event) {
        event.preventDefault(); // Prevent the default form submission

        // Validate the form fields
        var username = $("#username").val();
        var password = $("#password").val();

        if (username === "" || password === "") {
          alert("Please enter both username and password.");
          return;
        }

        // Perform AJAX request to handle login
        $.ajax({
          type: "POST",
          url: "login.php",
          data: {
            username: username,
            password: password
          },
          success: function (response) {
            alert(response); // Display the response from the server (you can customize this part)
          }
        });
      });
    });

  </script>
</body>

</html>