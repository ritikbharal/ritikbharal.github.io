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
	    background: linear-gradient(45deg,#F17C58, #E94584, #24AADB , #27DBB1,#FFDC18, #FF3706);
	    background-size: 600% 100%;
	    background-repeat: no-repeat;
	    animation: gradient 10s linear infinite;
	    animation-direction: alternate;
	}
	@keyframes gradient {
	    0% {background-position: 0%}
	    100% {background-position: 100%}
	}

	.wrap
	{
		margin-top: -12%;
		height: 100%;
		display: flex;
		align-items: center;
		justify-content: space-around;
	}
	.container-fluid div
	{
		display: flex;
		align-items: center;
		justify-content: space-around;
		width: 100% !important;
	}

	.display
	{
		display: flex;
		align-items: center;
		justify-content: space-around;
	}

	.img-row
	{
		
	}

	.coin-img
	{
		width: 250px;
	}




	#scene {
	  perspective: 1000px;
	  width:200px;
	  height:200px;
	  position:relative;
	  top:50vh;
	  left:50vw;
	  transform:translateX(-50%) translateY(-50%);
	}
	#cylinderBase {
	  
	  transform-style:preserve-3d;
	  width:200px;
	  height:200px;
	  animation: turnAround 30s linear 0s infinite normal none running;
	}
	@keyframes turnAround {
	  0%{
	    transform:rotateX(0deg) rotateY(0deg);
	  }
	  100%{
	    transform:rotateX(360deg) rotateY(360deg);
	  }
	}
	#cylinderBase > div {
	  position:absolute;
	}
	#cylinderBase > .circle {
	  background-color:rgb(100, 100, 100);
	  border:1px solid black;
	  width:98px;
	  height:98px;
	  border-radius:50px;
	}
	#cylinderBase > .top {
	  transform:translateY(-50px) rotateX(90deg);
	}
	#cylinderBase > .bottom {
	  transform:translateY(150px) rotateX(-90deg);
	}
	#cylinderBase > .side {
	  width:100px;
	  height:200px;
	  
	}
	#cylinderBase > .side > div {
	  position:absolute;
	   width:100px;
	  height:200px;
	  background-color:rgb(100, 100, 100);
	}
	#cylinderBase > .side > .face1 {
	  transform:rotateY(90deg);
	}
	#cylinderBase > .side > .face2 {
	  transform:rotateY(45deg);
	}
	#cylinderBase > .side > .face3 {
	  transform:rotateY(-45deg);
	}





</style>


<?php 
	require_once("header.php");
?>

<body> 
	<div class="wrap w-100">
		<div class="container-fluid w-100 m-0 p-0">
			<div class="display row m-0 p-0">
							<div class="row m-0 p-0">
								<p class="text-white display-4 text-center">You Got</p>
							</div>
				<?php 
					

					if(isset($_POST["coin"]))
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
						echo 
							"<div class='p-0 m-0 row img-row mt-4'>
								<img class='coin-img' src='".$image_file."'>
							</div>
							<div class='p-0 m-0 row'>" .$got."</div>"
							;
					}

				 ?>
			</div>
		</div>	
	</div>
	
	<div id="scene">
	  <div id="cylinderBase">
	    <div class="top circle"></div>
	    <div class="bottom circle"></div>
	    <div class="side">
	      <div class="face0"></div>
	      <div class="face1"></div>
	      <div class="face2"></div>
	      <div class="face3"><img class="w-50" src="coin/head.png"></div>
	    </div>
	    
	  </div>
	</div>
</body>

<?php 
	require_once("footer.php");
?>

</html>

<?php 
 ?>