<!DOCTYPE html>
<html>
<head>
	<title>Header</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
</head>

<style>

	body
	{
		margin: 0px;
		padding: 0px;
	}
	.nav-container
	{
		background: #5551;
		padding: 10px 20px;
		font-family: sans-serif;
		font-size: 35px;
		display: flex;
		justify-content: space-between;
	}
	.logo
	{
		color: white;
		width: 200px;
	}
	.logo img
	{
		width: 45px;
	}
	.logo:hover .logo1
	{
		display: none;
	}
	.logo:hover .logo2
	{
		display: block !important;
		margin-top: 7px;
	}
	.links a
	{
		text-decoration: none;
		color: #ddd;
		margin-right: 50px;
		font-size: 20px;
		padding: 10px 15px;
		border-radius: 100px;
		transition: all 0.3s;
	}
	.links a:hover
	{
		color: #fff;
		background-color: #0003;
	}


</style>

<body>
	<div class="nav-container">
		<a href="home.php">
			<div class="logo">
				<img class="logo1" src="apps/logo1.svg">
				<img class="logo2 d-none" src="apps/logo2.svg">
			</div>
		</a>
		<div class="links">
			<a href="home.php" class="top-link" id="home">
				Home
			</a>
			<a href="apps.php" class="top-link" id="more">
				More Apps
			</a>
			<a href="about.php" class="top-link" id="about">
				About Us
			</a>	
		</div>
	</div>

</body>

<script
	src="https://code.jquery.com/jquery-3.5.1.min.js"
	integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
	crossorigin="anonymous">	
</script>

<script>

    $(document).ready(function() 
    {

    	/*
		var pathname = window.location.pathname;
	    alert(window.location);
	    */
	    
	    var url1 = "http://localhost/php7/template_random_images/home.php";
	    var url2 = "http://localhost/php7/template_random_images/apps.php";
	    var url3 = "http://localhost/php7/template_random_images/about.php";
	    var url4 = "/php7/template_random_images/home.php";
	    var url5 = "/php7/template_random_images/apps.php";
	    var url6 = "/php7/template_random_images/about.php";


		if (location.href==url1)
		{
			$('#home').hide();
		}
		else if (location.href==url2)
		{
			$('#more').hide();
		}
		else if (location.href==url3)
		{
			$('#about').hide();
		}
		else if (window.location.pathname==url4)
		{
			$('#more').hide();
		}
		else if (window.location.pathname==url5)
		{
			$('#about').hide();
		}
		else if (window.location.pathname==url6)
		{
			$('#more').hide();
		}

	    /*
	    if (window.location === "http://localhost/php7/Projects/template_random_images/home.php") 
	    {
	    	document.getElementById("home").style.display = "none";
	    }
	    else
	    	alert(Hello);
	    */
	    

	});


</script>

</html>