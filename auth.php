<?php

//Include Config
include("config/db_connect.php");

if (isset($_SESSION['user_id'])) {
  $loggedInUserId = $_SESSION['user_id'];
  $user_role = $_SESSION['user_role'];
  $user_data_query = mysqli_query($con, "SELECT firstname, lastname, email, username FROM users WHERE user_id='$loggedInUserId'");
  $row = mysqli_fetch_array($user_data_query);

  $first_name = $row['firstname'];
  $last_name = $row['lastname'];
  $email = $row['email'];
  $username = $row['username'];
}
else {
	header("Location: login");
}


?>