<?php 

include("../config/db_connect.php");
###Get Varibles from Post Array###

include("../navigation/index.php");

include("../forms/login.php");



if ($_SERVER['REQUEST_METHOD'] == 'POST') { // A form is posted
    if (isset($_POST['login'])) { // Login process
        $useremail = $_POST['logemail'];
        $userpass = md5($_POST['logpass']);
        $query = mysqli_query($con, "SELECT * FROM users WHERE email = '$useremail' AND pass = '$userpass'");
        if($query){
            if(mysqli_num_rows($query) == 1) {
                $row = mysqli_fetch_assoc($query);
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['user_name'] = $row['firstname'] . " " . $row['lastname'];
                $_SESSION['user_role'] = $row['user_type'] ;
                header("location: ../home");
            }
            else {
                ?> <script>
                    document.getElementsByClassName("required")[0].innerHTML = "Invalid Login Credentials.";
                    document.getElementsByClassName("required")[1].innerHTML = "Invalid Login Credentials.";
                </script> <?php
            }
        } else{
            echo mysqli_error($con);
        }
    }
}

include("../footer/index.php")

 ?>


	
   