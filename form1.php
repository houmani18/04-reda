<!DOCTYPE html>
<html>
<head>
	<title>Formulaire en PHP</title>
</head>
<style>
	*{
		padding: 0;
		margin: 0;
	}

	body{
		height:90vh;
		background-color: #b677b85e;
	}

	form{
		height: 480px;
		width: 400px;
		padding: 81px;
		background-color: #d8ffcd57;
		margin-top: 50px;
		padding-bottom: 116px;
	}

	h1{
		margin: 10px;
		font-family:Arial;
		color:red;
		font-size:20px;
	}

	input{
		border-radius: 20px;
		width: 370px;
		height: 25px;
		text-align: center;
	}

	input[type='submit']:hover{
		cursor: pointer;
		background-color:gray;
	}

	label{
		font-size:20px;
		padding-bottom: 9px;
	}

	input[type="radio" ] {
		cursor: default;
		appearance: auto;
		box-sizing: border-box;
		margin-left: -10px;
		width: 97px;
	}

	.sexe{
		display: contents;
	}

	@media screen and (max-width: 768px) {
		form{
			height: 430px;
			width: 223px;
			padding: 43px;
			background-color: #d8ffcd57;
			margin-top: 64px;
		}
		input{
			border-radius: 20px;
			width: 185px;
			height: 17px;
			text-align: center;
		}
		input[type="radio" ] {
			cursor: default;
			appearance: auto;
			box-sizing: border-box;
			margin-left: -37px;
	}
	} 

	@media screen and (min-width: 769px) and (max-width: 1024px) {
		form{
			height: 443px;
			width: 400px;
			padding: 44px;
			background-color: #d8ffcd57;
			margin-top: 69px;
			padding-bottom: 110px;
		}
		
		input{
			border-radius: 20px;
			width: 370px;
			height: 25px;
			text-align: center;
		}
	}

	@media screen and (min-width: 1025px) {
		form{
			height: 480px;
			width: 400px;
			padding: 81px;
			background-color: #d8ffcd57;
			margin-top: 50px;
			padding-bottom: 116px;
		}
		
		input{
			border-radius: 20px;
			width: 370px;
			height: 25px;
			text-align: center;
		}
	}
</style>
<body>
	<?php
	if(isset($_POST['sub'])){
		$host = 'localhost';
		$user = 'root';
		$pass = '';
		$db = 'reda';
		$conn = mysqli_connect($host,$user,$pass,$db);
		$cin = $_POST['cin'];
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$email = $_POST['email'];
		$sexe = $_POST['sexe'];
		$pass = md5($_POST['motpass']);
		$sql = "INSERT INTO inscription VALUES ('$cin','$nom','$prenom','$sexe','$email','$pass')";
		mysqli_query($conn,$sql);
	}
	?>
	<center>
		<form method="post">
			<h1>sign up</h1>
			<div>
				<label >cin :</label>
			    <input type="text" name="cin"><br><br>
			</div>
			<div>
				<label >nom :</label>
			    <input type="text" name="nom"><br><br>
			</div>
			<div>
				<label >prenom :</label>
				<input type="text" name="prenom"><br><br>
			</div>
			<div class="sexe">
				<label >sexe:</label><br>
				femme<input type="radio" name="sexe" value="femme">
				homme<input type="radio" name="sexe" value="homme"><br><br>
			</div>
			<div>
				<label >Email:</label>
				<input type="email" name="email"><br><br>
			</div>
			<div>
				<label >mot de passe :</label>
				<input type="password" name="motpass"><br><br>
			</div>
			
			<div>
				<input type="submit" value="envoyer" name="sub">
			</div>
		</form>
	</center>
</body>
</html>