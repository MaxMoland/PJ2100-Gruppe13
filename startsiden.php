<!DOCTYPE html>
<html>
<head>
	<title> Westerdals booking </title>
	<meta charset="UTF-8">

	<style type="text/css">

		#center {
			margin-left: auto;
			margin-right: auto;
			margin-top: auto;
			width: 25%;
			background-color: white;
		}
		.knapper {
			margin-top: 50px;
			position: relative;
			text-align: center;
		}
		body {
			background-color: white;
		}
		h1 {
			color:grey;
			text-align: center;	
		}
		img {
			display: block;
			margin-left: auto;
			margin-right: auto;
		}
	</style>
</head>
<body>
	<div id="center">
		<h1> Westerdals booking </h1>
		<img src="./Bilder/WACT.jpg" alt="Westerdals Icon" height="300" width="300"></img>
		<a class="registrering" href="registrering.php">
			<img class="knapper" id="Registreringsknapp" src="./Bilder/Registreringsknapp.jpg" alt="Registerrings knapp" width="500"></img>
		</a>
		<a class="logginn" href="logginn.php">
			<img class="knapper" id="LoggInnKnapp" src="./Bilder/LoggInnKnapp.jpg" alt="Log Inn Knapp" width="500"></img>
		</a>
		<a class="glemtPassord" href="glemtPassord.php">
			<img class="knapper" id="glemtPassord" src="./Bilder/GlemtPassordKnapp.jpg" alt="Glemt Passord Knapp" width="500"></img>
		</a>
	</div>
</body>
</html>