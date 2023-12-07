<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Document metadata -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- External resources -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
  
  <?php if( $page == "register" || $page == "login"  ){ ?>
	<link rel="stylesheet" href="register.css" />
  <?php } ?>
  <link rel="stylesheet" href="styles.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Title of the webpage -->
  <title>Fit Club | Fitclub</title>
  
</head>

<body>
  <!-- Navigation Section -->
  <nav>
    <div class="nav__logo">
      <a href="#"><img src="assets/logo.png" alt="logo" /></a>
    </div>
    <ul class="nav__links">
      <!-- Navigation links -->
      <li class="link"><a href="index.php">Home</a></li>
      <li class="link"><a href="plan.html">Plan</a></li>
      <li class="link"><a href="gallery.html">Gallery</a></li>
      <li class="link"><a href="about.html">About Us</a></li>
      <li class="link"><a href="whyUs.html">Why us?</a></li>
    </ul>

    <!-- Register Now button -->
	<?php 
	if( !isset( $_SESSION['logged_in'] )){
		if( isset($_SESSION['registerd']) ) { ?>
			<button id="LogInButton" class="btn">Login</button>
		<?php } else { ?>
			<button id="RegisterInButton" class="btn">Register Now</button>
		<?php }
	} else { ?>
		<button id="logountButton" class="btn">LOG OUT</button>
	<?php } ?>
  </nav>


