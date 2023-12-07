<?php
session_start();
include("db.php");
$page = "register";

if(isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];

    $sql = "SELECT * FROM users WHERE id = $user_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // User ka data $row mein hoga
    } else {
        echo "User not found";
    }
}

// Check if the registration form is submitted
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && !empty($password) && !is_numeric($email)) {
      
        $query = "UPDATE users set username='$username',email='$email',password='$password' where id='$id'";
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
      <form id="registrationForm" class="form"  method="post" action="update_account.php">
        <h2>Update Profile</h2>
        <div class="input-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" required placeholder="Username" value="<?php echo $row['username']; ?>">
        </div>

        <div class="input-group">
          <label for="Email">Email</label>
          <input type="email" id="email" name="email" required placeholder="Email" value="<?php echo $row['email']; ?>">
        </div>

        <div class="input-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required placeholder="New Password" >
        </div>
        
        
        <button type="submit" id="registerButton">Update</button>
      </form>
      
    </div>
  </div>

<?php include('footer.php'); ?>