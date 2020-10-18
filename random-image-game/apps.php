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
	    background: linear-gradient(45deg,#F17C58, #E94584, #24AADB , #27DBB1,#FFDC18, #FF3706);
	    background-color: #0003;
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

	.app-image img
	{
		width: 50px;
		float: left;
		transition: all 0.3s;
	}

	.div-1
	{
		padding: 40px 0px;
		display: flex;
		align-items: center;
		justify-content: space-between;
	}
	.div-1 .app
	{
		margin: auto;
		position: relative;
		border: 0px;
		padding: 0px 0px;
		width: 480px;
		border-radius: 40px;
		background-color: #dededeff;
		box-shadow: inset 10px 10px 10px 1px #fff, inset -10px -10px 10px 1px #0006;
		transition: all 0.3s;
		color: #000d;
	}
	.row
	{
		font-size: 23px;
		font-weight: 500;
		transition: all 0.3s;
	}
	.app-text
	{
		transform: scale(1,0);
		transition: all 0.3s;
		font-size: 14px;
	}
	.app-title 
	{
		position: relative;
		left: 25%;
		transition: all 0.3s;
	}
	.div-1 .app:hover
	{
		background-color: #eeeeeeff;
		box-shadow: inset 7px 7px 10px 1px #fff, inset -7px -7px 10px 1px #0006;
		color: #333;
		transition: all 0.3s;
		padding: 0px 0px;
		width: 570px;
	}

	.div-1 .app:hover .app-image img
	{
		width: 100px;
	}
	.div-1 .app:hover .row
	{
		font-size: 37px;
	}
	.div-1 .app:hover .app-text
	{
		transform: scale(1,1);
		font-size: 14px;
	}
	.app:hover .app-title
	{
		left: 0;
	}

</style>


<?php 
	require_once("header.php");
?>

<body>

	<p class="text-white display-4 text-center">Check out our other apps</p>
	<div class="wrap">
		<div class="div-container m-0 p-0">
			<div method="post" class="div-1" action="coin.php">
				<div class="app card">
					<div class="row w-100 pl-5">
						<div class="col-md-3 py-5 app-image">
							<img src="apps/notes.png">
						</div>
						<div class="w-100 col-md-9 pt-5">
							<div class="row w-100 text-center app-title w-100">
								Note Taking App
							</div>
							<div class="row app-text pr-5">
								A simple note taking web app that can be accessed at any place on any device with a web browser. <a class="stretched-link display-inline" href="./../../../php5\applications\03_application_notepad\php/login.php">Learn More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div method="post" class="div-1" action="dice.php">
				<div class="app card">
					<div class="row w-100 pl-5">
						<div class="col-md-3 py-5 app-image">
							<img src="apps/student.png">
						</div>
						<div class="w-100 col-md-9 pt-5">
							<div class="row w-100 text-center app-title w-100">
								Manage School
							</div>
							<div class="row app-text pr-5">
								A simple but powerful tool for schools to manage the staff as well as student data easily. <a class="stretched-link display-inline" href="./../../../php5\applications\02_application_student_management\html\login.php">Learn More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>

<?php 
	require_once("footer.php");
?>

</html>