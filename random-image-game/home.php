<!DOCTYPE html>
<html>
<head>
	<title>Get Your Luck</title>
</head>
<script
	src="https://code.jquery.com/jquery-3.5.1.min.js"
	integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
	crossorigin="anonymous">	
</script>
<script src="files/bootstrap_4.4.1.min.js"></script>
<script src="files/jquery_3.4.1.min"></script>
<link rel="stylesheet" type="text/css" href="files/bootstrap_4.4.1.min.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">


<style>
	html
	{
		height: 100%;
	}
	body {
		margin: 0px;
		padding: 0px;
	    width:100%;
	    height: 100%;
	    background-image: linear-gradient(45deg,#F17C58, #E94584, #24AADB , #27DBB1,#FFDC18, #FF3706);
	    background-color: #0005;
	    background-blend-mode: overlay;
	    background-size: 600% 100%;
	    background-repeat: no-repeat;
	    animation: gradient 10s linear infinite;
	    animation-direction: alternate;
	    overflow: hidden;
	}
	@keyframes gradient {
	    0% {background-position: 0%}
	    100% {background-position: 100%}
	}

	.wrap
	{
		margin-top: -10%;
		height: 100%;
		display: flex;
		align-items: center;
		justify-content: center;
	}

	.form-1
	{
		padding: 40px 0px;
		display: flex;
		align-items: center;
		justify-content: center;
	}
	.form-1 button
	{
		margin: auto;
		position: relative;
		border: 0px;
		padding: 40px 180px;
		font-size: 40px;
		border-radius: 100px;
		background-color: #dededeff;
		box-shadow: inset 10px 10px 10px 1px #fff, inset -10px -10px 10px 1px #0006;
		transition: all 0.3s;
		color: #000d;
	}
	.form-1 button:hover
	{
		background-color: #eeeeeeff;
		box-shadow: inset 7px 7px 10px 1px #fff, inset -7px -7px 10px 1px #0006;
		font-size: 37px;
		color: #333;
		transition: all 0.3s;
		padding: 39px 177px;
	}
	.form-1 button:focus
	{
		outline: none;
		font-size: 35px;
		background-color: #fefefeff;
		box-shadow: inset 3px 3px 10px 1px #fff, inset -3px -3px 10px 1px #0006;
	}

	.form-2
	{
		padding: 40px 0px;
		display: flex;
		align-items: center;
		justify-content: center;
	}
	.form-2 button
	{
		margin: auto;
		position: relative;
		border: 0px;
		padding: 40px 180px;
		font-size: 40px;
		border-radius: 100px;
		background-color: #dededeff;
		box-shadow: inset 10px 10px 10px 1px #fff, inset -10px -10px 10px 1px #0006;
		transition: all 0.3s;
		color: #000d;
	}
	.form-2 button:hover
	{
		background-color: #eeeeeeff;
		box-shadow: inset 7px 7px 10px 1px #fff, inset -7px -7px 10px 1px #0006;
		font-size: 37px;
		color: #333;
		transition: all 0.3s;
		padding: 39px 177px;
	}
	.form-2 button:focus
	{
		outline: none;
		font-size: 35px;
		background-color: #fefefeff;
		box-shadow: inset 2px 2px 10px 1px #fff, inset -2px -2px 10px 1px #0006;
	}


</style>


<?php 
	require_once("header.php");
?>

<body>

	<p class="text-white display-4 text-center">Test Your Luck</p>
	<div class="wrap">
		<div class="form-container m-0 p-0">
			<form method="post" class="form-1" action="coin.php">
				<button name="coin">Toss a Coin</button>
			</form>
			<form method="post" class="form-2" action="dice.php">
				<button name="dice">Roll a Dice</button>
			</form>
		</div>
	</div>

</body>

<?php 
	require_once("footer.php");
?>



</html>