<?php 

include("../config/db_connect.php");
###Get Varibles from Post Array###

include("../navigation/index.php");

include("../auth.php");

 

 ?>

gettype($b)

<section class="container">
      <h1 class="large text-primary">
        Dashboard
      </h1>
      <p class="lead"><i class="fas fa-user"></i> Welcome <?php echo $first_name . " " . $last_name; ?> </p>
      <div class="dash-buttons">
        <a href="../settings" class="btn">
          <i class="fas fa-user-circle text-primary"></i> Edit Profile
        </a>
        
        
      </div>

      <h2 class="my-2">
        My Details
      </h2>
      <table class="table">
        <thead>
          <tr>
            <th>First Name</th>
            <th class="hide-sm">Last Name</th>
            <th class="gide-sm">Username</th>
            <th>E-mail</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?php echo $first_name; ?></td>
            <td class="hide-sm"><?php echo $last_name; ?></td>
            <td class="hide-sm"><?php echo $username; ?></td>
            <td class="hide-sm"><?php echo $email; ?></td>
          </tr>
         
        </tbody>
      </table>


      <div class="my-2">
      <form action="settings.php" method="POST">
		
        <button type="submit" name="close_account" id="close_account" class="btn btn-danger">
          <i class="fas fa-user-minus"></i> Delete My Account
        </button>
	</form>
      </div>
    </section>
   
    <?php 

 
include("../footer/index.php")

 ?>