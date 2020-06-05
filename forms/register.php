<?php 

 ?>
	
    <section class="container">
      <h1 class="large text-primary">
        Sign Up
      </h1>
      <p class="lead"><i class="fas fa-user"></i> Create Your Account</p>
      <form method="POST" action="../register/" onSubmit="return validateRegister()" class="form">
        <div class="form-group">
          <input type="text" name="fname" id="regfname" placeholder="First Name"  />
          <span class="required"></span>
          
        </div>
        <div class="form-group">
          <input type="text" name="lname" id="reglname" placeholder="Last Name"  />
          <span class="required"></span>
          
        </div>
        <div class="form-group">
          <input type="text" name="username" id="regusername" placeholder="Username"  />
          <span class="required"></span>
         
        </div>
        <div class="form-group">
          <input type="email" name="regemail" id="regemail" placeholder="Email Address" />
          <span class="required"></span>
        
          
        </div>
        <div class="form-group">
          <input type="password" name="regpassword" id="regpassword" placeholder="Password"  />
          <span class="required"></span>
         
        </div>
        <div class="form-group">
          <input type="password" name="regpasswordconfirm" id="regpasswordconfirm" placeholder="Confirm Password"  />
          <span class="required"></span>
         
        </div>
        <input type="submit" value="Create Account" name="register" class="btn btn-primary" />
        
      </form>
      <p class="my-1">
        Already have an account? <a href="login">Sign in</a>
      </p>
    </section>




	</div>
    
</body>
</html>