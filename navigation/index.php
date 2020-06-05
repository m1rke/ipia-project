<?php  
//Start Session
session_start();
require '../config/db_connect.php';



?>

<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <script
      src="https://kit.fontawesome.com/81d5f6c52d.js"
      crossorigin="anonymous"
    ></script>
    <script type="text/JavaScript" src="../helpers/js.js"></script>
    <title>Welcome to the IPIA BLOG</title>
  </head>
  <body>

    <nav class="navbar bg-dark">
      <h1>
        <a href=".."> <i class="fas fa-code"></i> IPIA BLOG </a>
      </h1>
      <?php 

if (!isset($_SESSION['user_id'])){ ?>
    <ul>
        
        <li><a href="../register">Register</a></li>
        <li><a href="../login">Login</a></li>
      </ul>
<?php } else { ?>



  <ul>
<li>
<div class="wrap">
   <div class="search">
       <form  action="../search/index.php" method="GET" name="search_form">
      <input type="text" class="searchTerm" placeholder="What are you looking for?" name="query" id="query">
      <button type="submit" class="searchButton">
        <i class="fa fa-search"></i>
     </button>
</form>
   </div>
</div>
</li>
  


  <?php
      $isAdmin = $_SESSION['user_role'];
			if($isAdmin == "0"){
			?>
			<li>

<a href="../admin"
  ><i class="fas fa-user"></i>
  <span class="hide-sm">
    Administration
  </span>
</a>
</li>
			<?php
      }?>
      

        <li><a href="../settings">Settings</a></li>
        <li>
          <a href="../home"
            ><i class="fas fa-user"></i>
            <span class="hide-sm">
              Dashboard
            </span>
          </a>
        </li>
        <li>
          <a href="../logout"
            ><i class="fas fa-sign-out-alt"></i>
            <span class="hide-sm">
              Logout
            </span>
          </a>
        </li>
      </ul> 
<?php } ?>
    </nav>
  </body>
  </html>