<?php 

include("../config/db_connect.php");
###Get Varibles from Post Array###


include("../navigation/index.php");

include("../forms/settings.php");



if ($_SERVER['REQUEST_METHOD'] == 'POST') { // A form is posted
    if (isset($_POST['change_password'])) { // Password Change process
        // Retrieve Data
        $old_password = md5($_POST['oldpassword']);
        $new_password = md5($_POST['newpassword']);
        $confirm_new_password = md5($_POST['confirmnewpassword']);


        // Check for Some Unique Constraints
        $password_query = mysqli_query($con, "SELECT pass FROM users WHERE user_id='$loggedInUserId'");
	    $row = mysqli_fetch_array($password_query);
        $db_password = $row['pass'];
        
        if($old_password == $db_password) {
            if($new_password == $confirm_new_password) {

                $password_query = mysqli_query($con, "UPDATE users SET pass='$new_password' WHERE user_id='$loggedInUserId'");

            }
        }

        // Insert Data
        
    }

    if (isset($_POST['update_account'])) { // Password Change process
        // Retrieve Data
        $userfirstname = $_POST['updatename'];
        $userlastname = $_POST['updatelname'];
        $usernickname = $_POST['updateusername'];
        $useremail = $_POST['updateemail'];
        if (isset($_POST['userstype'])){
            $usertype = $_POST['userstype'];
        }
        else{
            $usertype = 1;
        }

          // Check for Some Unique Constraints
        $query = mysqli_query($con, "SELECT username, email FROM users WHERE username = '$usernickname' OR email = '$useremail'");
        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);
            if($usernickname == $row['username'] && !empty($usernickname)){
                ?> <script>
                document.getElementsByClassName("required")[2].innerHTML = "This Username already exists.";
                </script> <?php
                return false;
            }
            if($useremail == $row['email']){
                ?> <script>
                document.getElementsByClassName("required")[3].innerHTML = "This Email already exists.";
                </script> <?php
                return false;
            }
        }
       // Insert Data
        $query = mysqli_query($con, "UPDATE users SET firstname='$first_name', lastname='$last_name', email='$useremail', username='$usernickname' WHERE user_id='$loggedInUserId'");


        
    }
}


 
include("../footer/index.php")



 ?>


	
   