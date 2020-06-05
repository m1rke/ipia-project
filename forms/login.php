<?php 


 ?>
	
    <section class="container">     

      <h1 class="large text-primary">
        Sign In
      </h1>
      <div class="alert alrt-primary"><div>
      <p class="lead"><i class="fas fa-user"></i> Sign into your account</p>
      
      <form method="POST" action="../login/" onSubmit="return validateLogin()" class="form">  
        
        <div class="form-group">
          <input type="email" name="logemail" id="useremail" placeholder="Email Address" />
          <span class="required"></span>
        </div>
        <div class="form-group">
          <input type="password" name="logpass" id="userpassword" placeholder="Password"  />
          <span class="required"></span>
          
        </div>
        <input type="submit" value="Login" name="login" class="btn btn-primary" />
      </form>
      <p class="my-1">
        Don't have an account? <a href="register.html">Sign Up</a>
      </p>
    </section>




	</div>
</body>
</html>