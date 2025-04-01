<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Réservation</title>
	<link rel="stylesheet" href="style.css">
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

	<main>
		<div class="container">
			<h2>Formulaire de Réservation</h2>
			<form id="reservationformulaire" action="reservation_process.php" method="POST">
				<label class="reservationlabel" for="nom">Nom et prénom:</label>
				<input class ="reservationchamp" type="text" id="nom" name="nom" placeholder="Votre nom" required>

				<label class="reservationlabel" for="email">Email :</label>
				<input class ="reservationchamp" type="email" id="email" name="email" placeholder="Votre email" required>

				<label class="reservationlabel" for="telephone">Téléphone :</label>
				<input class ="reservationchamp" type="tel" id="telephone" name="telephone" placeholder="Votre numéro" required>

				<label class="reservationlabel" for="date">Date départ :</label>
				<input class ="reservationchamp" type="date" id="date" name="date" required>
				
				<label class="reservationlabel" for="Durée de la croisière">Durée de la croisière :</label>

				<select name="Durée de la croisière" id="Durée de la croisière" value="test">
					<option value="us">14 jours</option>
					<option value="ca">21 jours</option>
				</select>
						
				<label class="reservationlabel" for="message">Message (optionnel) :</label>
				<textarea class ="reservationchamp" id="message" name="message" placeholder="Ajoutez un message"></textarea>
                </br>
				<button class="submit">Réserver</button>
			</form>
		</div>
	</main>

	<footer>
		<p>&copy; 2025 - Viking Cruise</p>
	</footer>
</body>
</html>
