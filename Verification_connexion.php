<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Verification_connexion</title>
		<meta charset="UTF-8">
	</head>
	<body>	
	
		<?php 
			

			function Verification_utilisateur($util,$mdp){
				$validite = 3;
				$fichier_id=fopen("donnees/identifiant.csv","r") or die("Impossible d'ouvrir le fichier !");
				while(!feof($fichier_id)){
							
					$info_line=fgets($fichier_id);
					$info_tab=str_getcsv($info_line,";");
					

					if($info_tab[3] === $util){
						if($info_tab[2] !== $mdp){
							fclose($fichier_id);
							return 1;
						}
						else{
							if($info_tab[5] === "client"){
								$_SESSION["utilisateur"] = $info_tab[1];
								fclose($fichier_id);
								return 2;
							}
							else if($info_tab[5] === "admin"){
								$_SESSION["utilisateur"] = $info_tab[1];
								fclose($fichier_id);
								return 3;
							}
						}
						
					}
				}
				fclose($fichier_id);
				return 0;
			}
			
			
			switch(Verification_utilisateur($_POST["email"],$_POST["mot_de_passe"])){
				case 0: 
					header("Location: connexion.php?error=email");
					break;
				case 1: 
					header("Location: connexion.php?error=mdp");

					break;
				case 2:
					header("Location: profil.html");
					$_SESSION["statut"] = "connecte_client";
					break;
				case 3:
					header("Location: administrateur.php");
					$_SESSION["statut"] = "connecte_admin";
					break;
			
			}


		?>
	</body>
</html>