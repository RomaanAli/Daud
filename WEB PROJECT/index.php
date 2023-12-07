<?php
session_start();
include("db.php");
$page = 'Home';
?>
<?php include('header.php'); ?>

  <!-- Header Section -->
  <header class="section__container header__container">
    <div class="header__content">
      <!-- Background blur elements -->
      <span class="bg__blur"></span>
      <span class="bg__blur header__blur"></span>

      <!-- Headings and content -->
      <h4>BEST FITNESS IN THE LAHORE</h4>
      <h1><span>MAKE</span> YOUR BODY SHAPE</h1>
      <p>
        Unleash your potential and embark on a journey towards a stronger,
        fitter, and more confident you. Sign up for 'Make Your Body Shape' now
        and witness the incredible transformation your body is capable of!
      </p>

      <button id="JoinUsButton" class="btn">Join Us Now</button>
    </div>
    <!-- Header image -->
    <div class="header__image">
      <img src="assets/pngegg.png" alt="header" />
    </div>
  </header>

<?php include('footer.php'); ?>