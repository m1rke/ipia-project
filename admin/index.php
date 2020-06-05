<?php 

include("../config/db_connect.php");
###Get Varibles from Post Array###


include("../navigation/index.php");

include("../auth.php");

 

 ?>




<section class="container">


      <h1 class="large text-primary">
        Administration
      </h1>
      <p class="lead"><i class="fas fa-user"></i> Welcome <?php echo $first_name . " " . $last_name; ?>. Here you can delete specific user! </p>
      

      <h2 class="my-2">
        Users List
      </h2>
      <table class="table">
        <thead>
          <tr>
            <th>First Name</th>
            <th class="hide-sm">Last Name</th>
            <th class="gide-sm">Username</th>
            <th class="gide-sm">E-mail</th>
            <th class="gide-sm">Delete user</th>
          </tr>
        </thead>
        <tbody>
          
          <?php

$mysqli = new mysqli("localhost", "ipia", "ipia123", "ipia");

$query = "SELECT * from users";

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["firstname"];
        $field2name = $row["lastname"];
        $field3name = $row["username"];
        $field4name = $row["email"];
        $field5name = "<a href='../delete.php?id=".$row["user_id"]."'>Delete user</a>";
 
        echo ' <tr>
                <td class="hide-sm">'.$field1name.'</td> 
                <td class="hide-sm">'.$field2name.'</td> 
                <td class="hide-sm">'.$field3name.'</td> 
                <td class="hide-sm">'.$field4name.'</td> 
                <td class="hide-sm"><button class="btn btn-danger">'.$field5name.'</button></td>
                </tr>';
    }
    $result->free();
} 




?>
          
         
        </tbody>
      </table>
    </section>
   
    <?php 

 
include("../footer/index.php")

 ?>