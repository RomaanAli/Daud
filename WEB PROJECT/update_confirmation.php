<?php
session_start();
include("db.php"); 
// You can add HTML and messages here to confirm the deletion
echo "Your account has been successfully deleted.";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Deleted</title>
    <!-- Add your CSS styles or include external stylesheets here -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 100px;
        }

        .confirmation-message {
            background-color: #dff0d8;
            border: 1px solid #3c763d;
            color: #3c763d;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 4px;
        }
    </style>
</head>

<body>
    <div class="confirmation-message">
        <h2>Your account has been successfully deleted.</h2>
        <!-- Add additional messages or instructions here -->
        <p>Thank you for using our services. If you have any feedback, please let us know.</p>
    </div>

    <!-- Add additional content or links if needed -->

</body>

</html>
