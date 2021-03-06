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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>

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
		margin-top: -6%;
		height: 100%;
		display: flex;
		align-items: center;
		justify-content: center;
	}
	.container-fluid div
	{
		display: flex;
		align-items: center;
		justify-content: center;
		width: 100% !important;
	}

	.display
	{
		display: flex;
		align-items: center;
		justify-content: center;
	}

	.img-row
	{
		
	}

	.coin-img
	{
		width: 250px;
	}

	.got-text
	{
		font-size: 50px;
		color: white;
	}

	.display > form > button
	{
		background-color: #ccc;
		border: none;
		border-radius: 50px;
		font-size: 25px;
		padding: 10px 00px;
		height: 65px;
		width: 260px;
		box-shadow: inset 5px 5px 10px 1px #fff, inset -5px -5px 10px 1px #0006;
	}
	.display > form > button:focus
	{
		outline: none;
		font-size: 24px;
		box-shadow: inset 2px 2px 10px 1px #fff, inset -2px -2px 10px 1px #0006;
	}



</style>


<?php 
	require_once("header.php");
?>

<body> 
	<div class="wrap w-100">
		<div class="container-fluid w-100 m-0 p-0">
			<div class="display row m-0 p-0">
				<?php 
					

					if(isset($_POST["toss"]))
					{
						srand( microtime(true) * 1000000 );
						$num = rand( 1, 2 );
						switch ( $num ) 
						{
							case 1: $image_file = "coin/head.png";
									$got = "Head";
								break;
							case 2: $image_file = "coin/tail.png";
									$got = "Tail";
								break;
						}
						srand( microtime(true) * 1000000 );
						$num2 = rand( 1, 2 );
						switch ( $num2 ) 
						{
							case 1: $animate = "animate__animated animate__flip";
									$animate2 = "animate__animated animate__bounceInLeft";
								break;
							case 2: $animate = "animate__animated animate__flip";
									$animate2 = "animate__animated animate__bounceInRight";
								break;
						}
						echo 
							"<div class='row m-0 p-0'>
								<p class='text-white display-4 text-center'>You Got</p>
							</div>
							<div class='p-0 m-0 row img-row mt-4'>
								<img class='coin-img ".$animate."' src='".$image_file."'>
							</div>
							<div class='p-0 m-0 mb-3 got-text ".$animate2." row'>" .$got."</div>"
							;
					}

				 ?>

							<form method="post">
								<button name="toss" class="btn">Toss Me</button>
							</form>
			</div>
		</div>	
	</div>
</body>

<?php 
	require_once("footer.php");
?>

</html>