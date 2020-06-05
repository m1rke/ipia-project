<?php 

include("../config/db_connect.php");
###Get Varibles from Post Array###


include("../navigation/index.php");

include("../forms/register.php");



if ($_SERVER['REQUEST_METHOD'] == 'POST') { // A form is posted
    if (isset($_POST['register'])) { // Register process
        // Retrieve Data
        $userfirstname = $_POST['fname'];
        $userlastname = $_POST['lname'];
        $usernickname = $_POST['username'];
        $userpassword = md5($_POST['regpassword']);
        $useremail = $_POST['regemail'];
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
        $sql = "INSERT INTO users(firstname, lastname, username, pass, email, user_type)
                VALUES ('$userfirstname', '$userlastname', '$usernickname', '$userpassword', '$useremail', '$usertype')";
        $query = mysqli_query($con, $sql);
        if($query){
            $query = mysqli_query($con, "SELECT user_id FROM users WHERE email = '$useremail'");
            $row = mysqli_fetch_assoc($query);
            $_SESSION['user_id'] = $row['user_id'];
            header("location:../home");
        }
    }
}


 
include("../footer/index.php")



 ?>


	
   