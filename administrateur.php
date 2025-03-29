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
				<li><a href="index.php">Accueil</a></li>
				<li><a href="presentation.html">Présentation</a></li>
				<li><a href="profil.php">Profil</a></li>
				<li><a href="recherche.html">Recherche</a></li>
				<li><a href="reservation.html">Réservation</a></li>
				<li><a href="administrateur.php">Administration</a></li>
			</ul>
		</div>
		<div id="boutonmenubar">
			<button class="boutonmenu"><a href=inscription.php>Inscription</a></button>  
			<button class="boutonmenu"><a href="connexion.php">Connexion</a></button>
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
