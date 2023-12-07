<?php
session_start();
include("db.php");
$page = "login";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && !empty($password) && !is_numeric($email)) {
      $query = "select * from users where email ='$email' limit 1";
      $result = mysqli_query($con,$query);

      if($result)
      {
        if($result && mysqli_num_rows($result) > 0)
        {
          $user_data = mysqli_fetch_assoc($result);
          if($user_data['password'] == $password)
          {
			$_SESSION['logged_in'] = true;
            header("location: index.php");
            die;
          }
        }
      }
      echo"<script type='text/javascript'> alert('wrong username or password')</script>";
    }
    else{
      echo"<script type='text/javascript'> alert('wrong username or password')</script>";
    }
}
?>
<?php include('header.php'); ?>

  <div class="test">
    <div class="container">
      <form class="form" method="post" action="">
        <h2>Login</h2>
        <div class="input-group">
          <label for="username">Email</label>
          <input type="text" id="username" name="email" required placeholder="Email">
        </div>

        <div class="input-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required placeholder="Password">
        </div>

        <div class="login-link">
          <p>Not Have an Acount? <a href="register.php">Register</a></p>
        </div>
        <button type="submit" >Login</button>
      </form>
    </div>
  </div>

  <?php include('footer.php'); ?>