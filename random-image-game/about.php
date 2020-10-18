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
		margin-top: -7%;
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

	table
	{
		background-color: #454d55cc !important;
	}

</style>


<?php 
	require_once("header.php");
?>

<body> 
	<div class="wrap w-100">
		<div class="container-fluid w-100 m-0 p-0">
			<div>
				<table class="table rounded table-borderless table-striped table-dark text-center w-100">
					<tr>
						<th>Creator</th>
						<td>Ritik Saini</td>
					</tr>
					<tr>
						<th>Email</th>
						<td>mail@xyz.com</td>
					</tr>
					<tr>
						<th>Phone</th>
						<td>9998887776</td>
					</tr>
					<tr>
						<th>Website</th>
						<td><a class="btn btn-primary" href="#">Click Here</a></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</body>

<?php 
	require_once("footer.php");
?>

</html>