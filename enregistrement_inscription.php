<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
} 
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
			$liste_id=fopen("donnees/identifiant.csv","a+") or die("Impossible d'ouvrir le fichier !");


			$new = $_POST["nom"] . ";" . $_POST["prenom"] . ";" 
			. $_POST["mot_de_passe"] . ";" . $_POST["email"] . ";" . str_replace(" ", "", $_POST["telephone"]) . ";" . "client;non;0%;non;";

			//Vérification qu'on est bien sur une nouvelle ligne
			fseek($liste_id, -1, SEEK_END); //Se place sur le dernier caractère
			$last_char = fgetc($liste_id);
			if ($last_char !== PHP_EOL) {
				fwrite($liste_id, PHP_EOL);	
			}

			fwrite($liste_id, $new);
			fclose($liste_id);

			//Création du fichier client
			$nom_fichier = str_replace(['@', '.', '+', '-', ' '], '_', trim($_POST["email"]));
			$chemin = "donnees/clients/" . $nom_fichier . ".csv";

			//Check si on peut créer le fichier dans clients

			if(!is_writable("clients")){
				chmod("clients", 0777);
			} 
			
			//Création du fichier
			file_put_contents($chemin, ' ');


        	header("Location: connexion.php");
			
			
		}
		else{
			header("Location: inscription.php?error=1");
		}
		?>
	
		<br> 	
	</body>
</html>