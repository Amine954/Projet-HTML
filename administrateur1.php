<?php
	session_start();
?>

<!DOCTYPE html>
<html>
  <head>
  		<meta charset = "utf-8">
  		<html lang = "fr">
      	<title>Administration | Viking Cruise</title>
      	<link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <header>
		<h1> Viking Cruise </h1>
	</header>
	<nav>
        <div id="listemenubar">
            <ul class="listemenu">
                <?php
                    echo "<li><a href='index.php'>Accueil</a></li>";
                    echo "<li><a href='presentation.php'>Présentation</a></li>" ;
                    if(isset($_SESSION["statut"]) && ($_SESSION["statut"] === "connecte_admin" || $_SESSION["statut"] === "connecte_client")){
                        echo "<li><a href='profil.php'>Profil</a></li>";
                    }
                    else{
                        echo "<li><a href='connexion.php'>Profil</a></li>";
                    }

                    echo "<li><a href='recherche.php'>Recherche</a></li>";
                    if(isset($_SESSION["statut"]) && ($_SESSION["statut"] === "connecte_admin" || $_SESSION["statut"] === "connecte_client")){
                        echo "<li><a href='reservation.php'>Réservation</a></li>";
                    }
                    else{
                        echo "<li><a href='connexion.php'>Réservation</a></li>";
                    }
                    
                    if(isset($_SESSION["statut"]) && $_SESSION["statut"] === "connecte_admin"){
                        echo "<li><a href='administrateur.php'>Administration</a></li>";
                    }
                ?>                   
                
            </ul>
        </div>
        <div id="boutonmenubar">
            <?php
                if(isset($_SESSION["statut"]) && ($_SESSION["statut"] === "connecte_admin" || $_SESSION["statut"] === "connecte_client")){
                    echo "<button class='boutonmenu'><a href='profil.php'>Inscription</a></button>";
                    echo "<button class='boutonmenu'><a href='profil.php'>Connexion</a></button>";
                    echo "<button class='boutonmenu' id='deconnexion'><a href='deconnexion.php'>Déconnexion</a></button>";
                }
                else{
                    echo "<button class='boutonmenu'><a href='inscription.php'>Inscription</a></button>";
                    echo "<button class='boutonmenu'><a href='connexion.php'>Connexion</a></button>";
                }
            ?>
        </div>
    </nav>

	<div>
		<h2>Liste des utilisateurs</h2>
		<table id="Admin">
			<tr>
				<th>Nom</th>
				<th>Prenom</th>
				<th>Email</th>
				<th>VIP</th>
				<th>Réduction</th>
				<th>Banni</th>
			</tr>
			
			<?php
				$fichier_util = fopen("donnees/identifiant.csv", "r") or die("Impossible d'ouvrir le fichier !");

				while(!feof($fichier_util)){

					$util = fgets($fichier_util);
					//Si la ligne n'est pas vide (une ligne vide a un caractère " " et "\n" d'où >2)
					if(strlen($util) > 2){

					
						$infos_util = str_getcsv($util, ";", " ");
						
						$nom = $infos_util[0];
						$prenom = $infos_util[1];
						$email = $infos_util[3];

						if($infos_util[5] === "client"){
							echo "<tr>";
							echo "<td>" . $nom . "</td>";
							echo "<td>" . $prenom . "</td>";
							echo "<td>" . $email . "</td>";
							echo "<td>Non <button class='AdminProfil'><img class='EditProfilImg' alt='Bouton edition profil' src='https://cdn-icons-png.flaticon.com/512/266/266146.png'/></button></td>";
							echo "<td>0% <button class='AdminProfil'><img class='EditProfilImg' alt='Bouton edition profil' src='https://cdn-icons-png.flaticon.com/512/266/266146.png'/></button></td>";
							echo "<td>Non <button class='AdminProfil'><img class='EditProfilImg' alt='Bouton edition profil' src='https://cdn-icons-png.flaticon.com/512/266/266146.png'/></button></td>";
							echo "</tr>";
						}
					}
				}

				fclose($fichier_util);


			?>


		</table>
	</div>
    <footer>
        <p>&copy; 2025 - Viking Cruise</p>
    </footer>
  </body>
</html>
