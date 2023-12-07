<?php
session_start();
include("db.php");
$page = "register";

// Check if the registration form is submitted
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && !empty($password) && !is_numeric($email)) {
        $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        mysqli_query($con, $query);

        echo "<script type='text/javascript'> alert('Successfully Register')</script>";
		$_SESSION['registerd'] = true;
        header("Location: login.php"); // Redirect to index page or another page
        exit();
    } else {
        echo "<script type='text/javascript'> alert('Enter some valid Information.')</script>";
    }
}
?>
<?php include('header.php'); ?>

  <div class="test">
    <div class="container">
      <form id="registrationForm" class="form"  method="post" action="  register.php">
        <h2>Register Now</h2>
        <div class="input-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" required placeholder="Username">
        </div>

        <div class="input-group">
          <label for="Email">Email</label>
          <input type="email" id="email" name="email" required placeholder="Email">
        </div>

        <div class="input-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required placeholder="Password">
        </div>
        <div class="login-link">
          <p>Already Have an Acount? <a href="login.php">Login</a></p>
        </div>
        
        <button type="submit" id="registerButton">Register</button>
      </form>
      
    </div>
  </div>

<?php include('footer.php'); ?>