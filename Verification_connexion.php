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
					

					if($info_tab[3] === $util){
						if($info_tab[2] !== $mdp){
							fclose($fichier_id);
							return 1;
						}
						else{
							if($info_tab[5] === "client"){
								$_SESSION["nom"] = $info_tab[0];
								$_SESSION["prenom"]=$info_tab[1];
								$_SESSION["mdp"]=$info_tab[2];
								$_SESSION["email"]=$info_tab[3];
								$_SESSION["tel"]=$info_tab[4];
								fclose($fichier_id);
								return 2;
							}
							else if($info_tab[5] === "admin"){
								$_SESSION["nom"] = $info_tab[0];
								$_SESSION["prenom"]=$info_tab[1];
								$_SESSION["mdp"]=$info_tab[2];
								$_SESSION["email"]=$info_tab[3];
								$_SESSION["tel"]=$info_tab[4];
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
					if($_GET['back']=='reservation'){
						header("Location: connexion.php?error=email&back=reservation");
						break;
					}
					else{
						header("Location: connexion.php?error=email");
						break;
					}
					
				case 1: 
					if($_GET['back']=='reservation'){
						header("Location: connexion.php?error=mdp&back=reservation");
						break;
					}
					else{
						header("Location: connexion.php?error=mdp");
						break;
					}
					
				case 2:
					$_SESSION["statut"] = "connecte_client";
					if($_GET['back']=='reservation'){
						header("Location: reservation.php");
						break;
					}
					else{
						header("Location: profil.php");
						break;
					}

				case 3:
					$_SESSION["statut"] = "connecte_admin";
					header("Location: administrateur.php");
					break;
			
			}


		?>
	</body>
</html>