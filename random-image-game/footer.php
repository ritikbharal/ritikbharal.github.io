<!DOCTYPE html>
<html>
<head>
	<title>Header</title>
</head>

<style>

	body
	{
		margin: 0px;
		padding: 0px;
	}
	.foot-wrap
	{
		/*
		background: #0006;
		*/
		background-image: radial-gradient(#0005,#0006);
		padding: 20px 20px 5px 20px;
		font-family: sans-serif;
		text-align: center;
		position: absolute;
		bottom: 0px;
		width: 100%;
	}
	.foot-text
	{
		text-decoration: none;
		color: #ddd;
		margin-right: 50px;
		font-size: 16px;
		width: 100% !important;
		padding: 0px;
	}
	.foot-text p.fun
	{
		font-size: 30px;
		font-weight: 100;
		line-height: 50%;
		font-family: 'Montserrat', sans-serif;
		margin-bottom: 20px;
		color: #fff7;
	}
	.foot-text p.creator
	{
		font-weight: 100;
		line-height: 50%;
		color: #fff7;
		font-family: 'Pacifico', cursive;
	}

</style>

<body>
	<div class="foot-wrap">
		<div class="foot-text">
			<p class="fun">This Web Application is just made for fun.</p>
			<p class="creator">Creator - Ritik Saini</p>
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
	    var url1 = "http://localhost/php7/Projects/template_random_images/home.php";
	    var url2 = "http://localhost/php7/Projects/template_random_images/apps.php";
	    var url3 = "http://localhost/php7/Projects/template_random_images/about.php";

		if (location.href==url1)
		{
			$('#home').hide();
		}
		if (location.href==url2)
		{
			$('#more').hide();
		}
		if (location.href==url3)
		{
			$('#about').hide();
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