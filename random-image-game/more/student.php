<?php
	
	// Start the session

	session_start();

		$server="localhost";
		$user="root";
		$pass="";


		$con= mysql_connect($server, $user, $pass);

		if (! $con) 
		
			echo "Failed to connect<br>";

			mysql_select_db("management");

		if(isset($_POST["log-in"]))

		{

			$p1 = $_POST["username"];
			$p2 = $_POST["password"];


			//  mySql  connection


			$sql= " SELECT * from login where username = '$p1' ";


			$result=mysql_query($sql, $con);


	    	while ($row=mysql_fetch_assoc($result))

			{

				$uname = $row["username"];  // picking data from table 
			   	$type = $row["type"]; 
			   	$pass = $row["password"];
			   	$name = $row["name"];
			   	$sno = $row["sno"];


		    	//  Checking type of data

		    	if ($type=="admin" && $pass==$p2 ) 
			    {

					$_SESSION["username"] = $uname;
			   		$_SESSION["type"] = $type; 
					$_SESSION["password"] = $pass;
					$_SESSION["name"] = $name;
					$_SESSION["sno"] = $sno;
					$_SESSION["log"] = "admin";

					header( "Location:admin/admin.php" );

					exit();

		    	}

		    	if ($type=="clerk" && $pass==$p2 ) 
		    	{

					$_SESSION["username"] = $uname;
			   		$_SESSION["type"] = $type; 
					$_SESSION["password"] = $pass;
					$_SESSION["name"] = $name;
					$_SESSION["sno"] = $sno;
					$_SESSION["log"] = "clerk";
				    		
					header( "Location:clerk/clerk.php" );

					exit();

		    	}

		    	if ($type=="student" && $pass==$p2 ) 
		    	{

					$_SESSION["username"] = $uname;
			   		$_SESSION["type"] = $type; 
					$_SESSION["password"] = $pass;
					$_SESSION["sno"] = $sno;
					$_SESSION["log"] = "student";
				    		
					header( "Location:student/profile.php" );

					exit();

		    	}

		    	else
		    	{
		    		echo "Wrong username or password";
		    	}

		    }

	    }
		
		




?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Login</title>

    <!-- Bootstrap -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="./../../bootstrap_4.4.1.min.css">

</head>

    <style>

    	/*  NAVBAR  */

      nav
      {
      	color: white;
      	background: #3377ff;
      	width: 100%;
      	box-shadow: 0px 2px 6px #0007;
      }

      .display-4
      {
      	margin-right: 150px;
      }


      /*  CONTENT   */


      .home-text
      {
      	height: 100%;
      	width: 100%;
      	padding-bottom: 30px;
      	border-top-left-radius: 5px;
      	border-top-right-radius: 5px;
      }

      .username, .password
      {
      	border:none;
      	border-radius: 0px;
      	border-bottom: 1px solid #595959;
      }

      .username:focus, .password:focus
      {
      	border:none;
      	border-radius: 0px;
      	border-bottom: 1px solid #595959;
      }

      .form-control:focus
      {
      	box-shadow: none!important;
      }



    form
	{
		padding: 0px 20px 0px 20px !important;
	}
	form .row
	{
		position: absolute
		width: 100% !important;
	}

	legend
	{
		font-size: 35px;
	}

	label
	{
	  position: relative;
	  display: inline-block;
	  color: #222;
	  top: 100px;
	  font-size: 1.25em;
	  transition: all .2s ease;
	  z-index: 10;
	  position: relative;
	  top: -30px;
	}

	.input-container 
	{
	  width: 75%;
	  position: relative;
	  margin: 45px auto -25px;
	}

	input[type="number"] 
	{
 	 	-webkit-appearance: textfield;
     	-moz-appearance: textfield;
        appearance: textfield;
	}

	input[type="number"]::-webkit-inner-spin-button,
	input[type="number"]::-webkit-outer-spin-button 
	{
	  -webkit-appearance: none;
	  margin: 0;
	}

	input[type="text"], input[type="password"], input[type="number"]   
	{
	  width: 100%;
	  position: relative;
	  display: inline-block;
	  font-size: 1.25rem;
	  padding: 0 0 5px 0;
	  color: #004D40;
	  background-color: transparent;
	  border: none;
	  border-bottom: solid 1px #ddd	;
	  outline: none;
	  z-index: 20;
	}

	input[type="text"]:focus~label, input[type="text"]:valid~label, input[type="password"]:focus~label, input[type="password"]:valid~label, input[type="number"]:focus~label, input[type="number"]:valid~label  
	{
	  top: -65px;
	  font-size: 1.20rem;
	  font-weight: 600;
	}

	input[type="submit"] {
	  cursor: pointer;
	  margin: auto;
	  width: 100%;
	  color: #E0F2F1;
	  font-family: 'Noto Sans', sans-serif;
	  font-size: 1.25em;
	  padding: 10px 0;
	  border-width: 0 0 0 0;
	  border-radius: 3px;
	  outline: none;
	}

	input[type="submit"]:active 
	{
	  background: #ff6600;
	  border: solid transparent;
	  border-width: 0 0 0px 0;
	}

	input[type="reset"] {
	  cursor: pointer;
	  margin: auto;
	  width: 100%;
	  color: #333;
	  font-family: 'Noto Sans', sans-serif;
	  font-size: 1.25em;
	  padding: 10px 0;
	  border-width: 0 0 0 0;
	  border-radius: 3px;
	  outline: none;
	}

      

    </style>

	<body>

		  	<nav class="navbar navbar-expand-lg navbar-dark">

				<h1 class="display-4">
				  	YOUR LOGO
				</h1>
		  

				<h4 class="ml-auto mr-5 display-5">
					LOG IN
				</h4>


			</nav>




		    <div class="container" style="width: 60%;">


			    <div id="home" class="container-fluid p-0"><br>

					<form method="post" autocomplete="off" action="login.php">

						<legend>
							<div class="home-text mt-5 py-3 m-0">
				            	<h3 style="font-size: 5.5vw;">
				            		Enter the details: 
				            	</h3>

				            </div>
				        </legend>

						<div class="row mt-3">
							<input required type="text" id="myid" class="username" name="username">
							<label class="label1">Username</label>
						</div><br><br>

						<div class="row">
							<input required type="password" class="password" name="password">
							<label class="label2">Password</label>
						</div><br><br><br>

						<input type="submit" class="form-control btn btn-primary" value="Log-In" name="log-in">

					</form>

				</div>
				
					
			</div>


    <script type="text/javascript" src="./../../../bootstrap_4.4.1.js"></script>
    

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



	<script>

		$(".username").click(function()
		{
			$(".label1").css("transform", "translateY(0px)");
		});


		$(".password").click(function()
		{
			$(".label2").css("transform", "translateY(0px)");
		});

	</script>

</body>
</html>