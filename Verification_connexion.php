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
				$fichier_id=fopen("donnees/identifiant.csv","r") or die("Impossible d'ouvrir le fichier !");
				while(!feof($fichier_id)){
							
					$info_line=fgets($fichier_id);
					$info_tab=str_getcsv($info_line,";");
								
					
					if(($info_tab[3] === $util) && ($info_tab[2] === $mdp)){
						if($info_tab[5] === "client"){
							echo $info_line;
							$_SESSION["client"] = $info_tab[1];
							return 1;
						}
						else if($info_tab[5] === "admin"){
							return 2;
						}
						
					}
				}
				fclose($fichier_id);
				return 0;
			}
			
			
			switch(Verification_utilisateur($_POST["email"],$_POST["mot_de_passe"])){
				case 0: 
					header("Location: connexion.php");
					break;
				case 1:
					header("Location: profil.html");
					$_SESSION["statut"] = "connecte_client"
					break;
				case 2:
					header("Location: administrateur.html");
					$_SESSION["statut"] = "connecte_admin"
					break;
			
			}


		?>
	</body>
</html>