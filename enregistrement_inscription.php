<?php 
	session_start(); 
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Enregistrement</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<?php
		$mail_valide = 1;
		//Verification adresse mail non utilisée
		$liste_id=fopen("donnees/identifiant.csv","r") or die("Impossible d'ouvrir le fichier !");

		while(!feof($liste_id)){
							
			$info_line=fgets($liste_id);
			$info_tab=str_getcsv($info_line,";");
						
			
			if($info_tab[3] === $_POST["email"]){
				$mail_valide = 0;
			}
				
		}
		fclose($liste_id);

		if($mail_valide == 1){
			//Ajout de l'utilisateur dans le fichier des identifiants clients
			$liste_id=fopen("donnees/identifiant.csv","a") or die("Impossible d'ouvrir le fichier !");
		
			$new = $_POST["nom"] . ";" . $_POST["prenom"] . ";" 
			. $_POST["mot_de_passe"] . ";" . $_POST["email"] . ";" . str_replace(" ", "", $_POST["telephone"]) . ";" . "client" . "\r";

			fwrite($liste_id, $new);
			fclose($liste_id);
        	header("Location: connexion.php");
			
			
		}
		else{
			header("Location: inscription.php?error=1");
		}
		?>
		

		
		
		<br> 	
	</body>
</html>