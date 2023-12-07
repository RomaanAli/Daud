<?php
session_start();
include("db.php");
$page = 'Plan';
if( !isset( $_SESSION['logged_in'] )){ 
	header("location: register.php");
	die;
}
// Check if the registration form is submitted
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $fname = $_POST['first'];
    $lname = $_POST['last'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $zipcode = $_POST['zipcode'];
    $country = $_POST['country'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $plantype = $_POST['plantype'];
    $personalTrainer = $_POST['personalTrainer'];
    $joinBefore = $_POST['joinbefore'];

    if (!empty($email) && !is_numeric($email)) {
      
      // Use prepared statements to prevent SQL injection
      $query = "INSERT INTO members (first_name, last_name, gender, address, city, zipcode, country, email, phone, plan_type, require_personal_trainer, been_in_gym_before)
      VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
      $stmt = $con->prepare($query);
      $stmt->bind_param("ssssssssssss", $fname, $lname, $gender, $address, $city, $zipcode, $country, $email, $phone, $plantype, $personalTrainer, $joinBefore);

      // Execute the prepared statement
      $stmt->execute();

      // Check if the query was successful
      if ($stmt->affected_rows > 0) {
          echo "<script type='text/javascript'> alert('Successfully Register')</script>";
          header("Location: status.html"); // Redirect to index page or another page
          exit();
      } else {
          echo "<script type='text/javascript'> alert('Error registering user.')</script>";
      }

      // Close the prepared statement
      $stmt->close();
  } else {
      echo "<script type='text/javascript'> alert('Enter some valid Information.')</script>";
  }
}
?>

<?php include('header.php'); ?>

  <div class="main-heading">
    <h1>Plan <span style="color: #da9241;">Joining</span> Form</h1>
    <hr>
  </div>

  <div class="joinPlan-para">
    <pre>
        Want to become a gym member? Fill this form below we will contact you
        shortly to complete your registration process.
    </pre>
  </div>

  <form method="post" action="joinPlan.php">
  <div class="joinPlan-input1">
    <label class="joinPlanLabel" for="name">Name</label>
    <input class="joinPlanLabelInput" type="text" id="first" name="first" placeholder="First" required>
    <input class="joinPlanLabelInput" type="text" id="last" name="last" placeholder="Last" required>
  </div>

  <div class="joinPlanGender">
    <label for="gender">Gender</label><br>
    <input class="joinPlanGenderRadioBtn" type="radio" name="gender" value="male"> Male <br>
    <input class="joinPlanGenderRadioBtn" type="radio" name="gender" value="female"> Female<br>
    <input class="joinPlanGenderRadioBtn" type="radio" name="gender" value="other"> Other
  </div>

  <div class="joinPlan-address">
    <label for="address">Home Address</label><br>
    <input class="joinPlanAddressInput1" type="text" id="address" name="address" placeholder="Address" required>
    <input class="joinPlanAddressInput2" type="text" id="city" name="city" placeholder="City" required><br>
    <input class="joinPlanAddressInput2" type="text" id="zipcode" name="zipcode" placeholder="Postal / Zip Code" required>

    <select class="joinPlanlabelCountry" id="country" name="country" required>
      <option>Select Country</option>
      <option value="pakistan">Pakistan</option>
      <option value="india">India</option>
      <option value="china">China</option>
      <option value="Turkey">Turkey</option>
    </select>
  </div>

  <div class="joinPlanEmailMain">
    <label for="email">Email</label><br>
    <input class="joinPlanEmailInput" type="email" id="email" name="email" placeholder="Email" required><br>
    <label for="phone">Phone</label><br>
    <input class="joinPlanEmailInput" type="text" id="phone" name="phone"placeholder="### ### ###" required><br>

    <select class="joinPlanlabelCountry" id="plantype" name="plantype" required>
      <option>Select Plan</option>
      <option value="basic">Basic Plan (Rs 16000)</option>
      <option value="weekly">Weekly Plan (Rs 14000) </option>
      <option value="monthly">Monthly Plan (Rs 18000) </option>
    </select><br>

    <label for="personalTrainer">Do you require a personal trainer?</label><br>
    <input type="radio" name="personalTrainer" value="yes"> Yes
    <input type="radio" name="personalTrainer" value="no"> No<br>

    <label for="joinbefore">Have you been in a Gym before?</label><br>
    <input type="radio" name="joinbefore" value="yes"> Yes
    <input type="radio" name="joinbefore" value="no"> No<br><br>

    <div class="joinPlanButton">
      <button type="submit" class="joinPlanbtn">Click for Apply</button>
    </div>
  </div>
</form>
<?php include('footer.php'); ?>