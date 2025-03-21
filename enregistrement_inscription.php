<!DOCTYPE html>
<html>
	<head>
		<title>Enregistrement</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<?php
		
		$liste_identifiants=fopen("donnees/identifiant.csv","a") or die("Impossible d'ouvrir le fichier !");

		$infos = $_POST["nom"] . ";" . $_POST["prenom"] . ";" 
		. $_POST["mot_de_passe"] . ";" . $_POST["email"] . ";" . str_replace(" ", "", $_POST["telephone"]) . ";" . "client" . "\r";

		fwrite($liste_identifiants, $infos);
		fclose($liste_identifiants);
        header("Location: connexion.php");
		?>

		
		
		<br> 	
	</body>
</html>