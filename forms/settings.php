<?php 

include("../auth.php");

 ?>
	
    <section class="container">
      <h1 class="large text-primary">
        Edit Your profile
      </h1>
      <p class="lead"><i class="fas fa-user"></i> Modify the values and click 'Update Details'</p>
      <form method="POST" action="../settings/" onSubmit="return validateRegister()" class="form">
        <div class="form-group">
          <input type="text" name="updatename" id="regfname" value="<?php echo $first_name; ?>"  />
          <span class="required"></span>
          
        </div>
        <div class="form-group">
          <input type="text" name="updatelname" id="reglname" value="<?php echo $last_name; ?>"  />
          <span class="required"></span>
          
        </div>
        <div class="form-group">
          <input type="text" name="updateusername" id="regusername" value="<?php echo $username; ?>"  />
          <span class="required"></span>
         
        </div>
        <div class="form-group">
          <input type="email" name="updateemail" id="regemail" value="<?php echo $email; ?>" />
          <span class="required"></span>
        
          
        </div>
        <input type="submit" value="Update Account" name="update_account" class="btn btn-primary" />
        
      </form>
      <br>
      <h1 class="large text-primary">
        Change Your Password
      </h1>
      <p class="lead"><i class="fas fa-user"></i> Modify the values and click 'Change Password'</p>

      <form method="POST" action="../settings/" onSubmit="return validateChangePass()" class="form">
      <div class="form-group">
          <input type="password" name="oldpassword" id="resetpasswordold" placeholder="Old Password"  />
          <span class="required"></span>
         
        </div>
      <div class="form-group">
          <input type="password" name="newpassword" id="resetpasswordnew" placeholder="New Password"  />
          <span class="required"></span>
         
        </div>
        <div class="form-group">
          <input type="password" name="confirmnewpassword" id="resetpasswordconfirm" placeholder="Confirm New Password"  />
          <span class="required"></span>
         
        </div>
        
        <input type="submit" value="Change Password" name="change_password" class="btn btn-primary" />
        
      </form>

    </section>




	</div>
    
</body>
</html>