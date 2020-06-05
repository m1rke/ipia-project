<?php

include("../config/db_connect.php");
###Get Varibles from Post Array###

include("../navigation/index.php");

include("../auth.php");

//Check to see if user exists
$query = $_GET['query'];

// echo "<br/><br/><br/>";

//echo $query;
$queryterms = explode(" ",$query);
$myuserid = $_SESSION['user_id'];

switch (count($queryterms))
{
	case 0:
	{
		echo "<section class='container'><hl>Please enter some search terms!<h1></section>";
	}
		break;
	case 1:
	{
		$searchterm = $queryterms[0];
		$searchquery="SELECT * FROM users WHERE (firstname='$searchterm') OR (lastname='$searchterm');";
		$searchresult=mysqli_query($con, $searchquery) or die("Unable to search DB!");
		$numberofresults = mysqli_num_rows($searchresult);
		if ($numberofresults)
		{
            echo "<h2 class='my-2'>
        Users List
      </h2>
      <table class='table'>
        <thead>
          <tr>
            <th>First Name</th>
            <th class='hide-sm'>Last Name</th>
            <th class='gide-sm'>Username</th>
            <th class='gide-sm'>E-mail</th>
            <th class='gide-sm'>Delete user</th>
          </tr>
        </thead>
        <tbody>";
		 echo "<section class='container'><h1>Search Results</h1><table id='searchresults' class='searchresults' border=\"1\"><tr></section>";
		 while ($row = mysqli_fetch_assoc($searchresult)) 
				{
				
		
					//Info about user
					$fname = $row['firstname'];
					$lname = $row['lastname'];
		
					//Print Table Content
					echo "<section class='container'><tr><td><h3><a href='profile.php?id=$lname' 'alt='$fname $lname's Profile'>$fname $lname</a></h3></td></section>";
					if(isset($row['city']))
					{
						echo $row['city'];
						echo ", ";
						echo $row['state'];
					}
					echo "<td>";
				
					echo "</td></tr>";
					}
		echo "<h2 class='my-2'>
        Users List
      </h2>
      <table class='table'>
        <thead>
          <tr>
            <th>First Name</th>
            <th class='hide-sm'>Last Name</th>
            <th class='gide-sm'>Username</th>
            <th class='gide-sm'>E-mail</th>
            <th class='gide-sm'>Delete user</th>
          </tr>
        </thead>
        <tbody>";
		}
		else echo "<section class='container'><h1>No Results</h1></section>";
	}
		break;
	case 2:
	{
		$searchterm1 = $queryterms[0];
		$searchterm2 = $queryterms[1];
		$searchquery="SELECT * FROM userinfo WHERE (firstname='$searchterm1') AND (lastname='$searchterm2');";
		$searchresult=mysqli_query($con, $searchquery) or die("Unable to search DB!");
		$numberofresults = mysql_num_rows($searchresult);
		if ($numberofresults)
		{
		 echo "<section class='container'><h1>Search Results</h1><table id='searchresults' class='searchresults' border=\"1\"><tr></section>";
		 while ($row = mysql_fetch_assoc($searchresult)) 
				{
				
		
					//Info about user
					$fname = $row['fname'];
					$lname = $row['lname'];
		
					//Print Table Content
					echo "<tr><td><h3><a href='profile.php?id=$friendid' 'alt='$fname $lname's Profile'>$fname $lname</a></h3></td>";
					if(isset($row['city']))
					{
						echo $row['city'];
						echo ", ";
						echo $row['state'];
					}
					echo "<td>";
					$f = friendStatus($friendid,$myuserid);
					displayrelationoptions($f, $friendid);
					echo "</td></tr>";
					}
		echo "</table>";
		}
		else echo "<section class='container'><h1>No Results</h1></section>";
	}
		break;		
}


?>