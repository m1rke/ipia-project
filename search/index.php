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
		echo "<hl>Please enter some search terms!<h1>";
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
			echo "<section class='container'><h2 class='my-2'>
			Search List
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
			<tbody></section>";
		 while ($row = mysqli_fetch_assoc($searchresult)) 
				{

					//Info about user
					$fname = $row['firstname'];
					$lname = $row['lastname'];
					$username = $row['username'];
					$email = $row['email'];
					$deleteuser = "<a href='../delete.php?id=".$row["user_id"]."'>Delete user</a>";

		
					//Print Table Content
					echo ' <tr>
                <td class="hide-sm">'.$fname.'</td> 
                <td class="hide-sm">'.$lname.'</td> 
                <td class="hide-sm">'.$username.'</td> 
                <td class="hide-sm">'.$email.'</td> 
                <td class="hide-sm"><button class="btn btn-danger">'.$deleteuser.'</button></td>
                </tr>';
    }
    
					
		
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
			echo "<section class='container'><h2 class='my-2'>
			Search List
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
			<tbody></section>";
		 while ($row = mysqli_fetch_assoc($searchresult)) 
				{

					//Info about user
					$fname = $row['firstname'];
					$lname = $row['lastname'];
					$username = $row['username'];
					$email = $row['email'];
					$deleteuser = "<a href='../delete.php?id=".$row["user_id"]."'>Delete user</a>";

		
					//Print Table Content
					echo ' <tr>
                <td class="hide-sm">'.$fname.'</td> 
                <td class="hide-sm">'.$lname.'</td> 
                <td class="hide-sm">'.$username.'</td> 
                <td class="hide-sm">'.$email.'</td> 
                <td class="hide-sm"><button class="btn btn-danger">'.$deleteuser.'</button></td>
                </tr>';
    }
    
					
		
		}
		else echo "<section class='container'><h1>No Results</h1></section>";
	}
		break;		
}


 
include("../footer/index.php")



?>