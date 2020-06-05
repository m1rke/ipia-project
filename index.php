<?php 
session_start();
if(isset($_SESSION['user_id']))
{
	header("location: ./home");
}

 ?>
	<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script
      src="https://kit.fontawesome.com/81d5f6c52d.js"
      crossorigin="anonymous"
    ></script>
    <title>Welcome to the IPIA BLOG</title>
  </head>
  <body>

    <nav class="navbar bg-dark">
      <h1>
        <a href=""> <i class="fas fa-code"></i> IPIA BLOG </a>
      </h1>
      <?php 

if (!isset($_SESSION['user_id'])){ ?>
    <ul>
        
        <li><a href="register">Register</a></li>
        <li><a href="login">Login</a></li>
      </ul>
<?php } else { ?>
  <ul>
  <?php
    if (isset($_SESSION['user_role']) == 0) {
        echo '<li>

        <a href="../admin"
          ><i class="fas fa-user"></i>
          <span class="hide-sm">
            Administration
          </span>
        </a>
      </li>';
    }

   ?>
        <li><a href="profiles.html">Setting</a></li>
        <li><a href="posts.html">Posts</a></li>
        <li>
          <a href="dashboard.html"
            ><i class="fas fa-user"></i>
            <span class="hide-sm">
              Dashboard
            </span>
          </a>
        </li>
        <li>
          <a href="login.html"
            ><i class="fas fa-sign-out-alt"></i>
            <span class="hide-sm">
              Logout
            </span>
          </a>
        </li>
      </ul> 
<?php } ?>
    </nav>

    <section class="landing">
      <div class="dark-overlay">
        <div class="landing-inner">
          <h1 class="x-large">IPIA BLOG</h1>
          <p class="lead">
            Create student profile/portfolio, share blogs and get help from
            other students
          </p>
          <div class="buttons">
            <a href="register" class="btn btn-primary">Sign up</a>
            <a href="login" class="btn btn">Login</a>
          </div>
        </div>
      </div>
    </section>




	
</body>
</html>