<?php
	session_start();
?>
<!DOCTYPE html>
<html>
  <head>
  		<meta charset = "utf-8">
  		<html lang = "fr">
      	<title>Inscription | Viking Cruise</title>
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

  <main>
		<div class="container">
			<h2>Formulaire d'inscription</h2>
			<form id="reservationformulaire" action="enregistrement_inscription.php" method="POST">

			<label class="reservationlabel" for="nom">Nom :</label>
			<input class ="reservationchamp" type="text" id="nom" name="nom" placeholder="Votre nom" required>

      		<label class="reservationlabel" for="nom">Prénom:</label>
			<input class ="reservationchamp" type="text" id="prenom" name="prenom" placeholder="Votre prénom" required>

			<label class="reservationlabel" for="email">Email :</label>
			<input class ="reservationchamp" type="email" id="email" name="email" placeholder="Votre email" required>

      		<label class ="reservationlabel" for="password">Mot de passe :</label>
			<input class ="reservationchamp" type="password" name="mot_de_passe" id="mot_de_passe" required/>

			<label class="reservationlabel" for="telephone">Téléphone :</label>
			<input class ="reservationchamp" type="tel" id="telephone" name="telephone" placeholder="Votre numéro" 
			minlength=10 maxlength=10 required>

      <br/>
      <em> En cliquant sur "S'inscrire", vous vous engagez à accepter les conditions d'utilisations </em>
      <br/>

			<button class="submit">S'inscrire</button>

      <br/>
      <a href="connexion.php">Déjà un compte ? <u>Connectez vous ici !</u></a>

	  <?php 
		if(isset($_GET['error']) && $_GET['error']){
			echo "<p style='color:red; text-align:center'>Email déjà pris</p>";
		 }
	  ?>

		  </form>
	  </div>
	</main>

  <footer>
    <div class="footer-content">
        <div class="footer-column">
            <h3>Viking Cruise</h3>
            <p>Voyagez en toute sérénité à travers les plus belles destinations de la mer Baltique et de la Scandinavie.</p>
            <div class="social-links">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
        <div class="footer-column">
            <h3>Destinations</h3>
            <ul class="footer-links">
                <li><a href="#">Suède</a></li>
                <li><a href="#">Danemark</a></li>
                <li><a href="#">Norvège</a></li>
                <li><a href="#">Finlande</a></li>
                <li><a href="#">Estonie</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>Informations</h3>
            <ul class="footer-links">
                <li><a href="#">À propos de nous</a></li>
                <li><a href="#">Nos navires</a></li>
                <li><a href="#">Conditions générales</a></li>
                <li><a href="#">Politique de confidentialité</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>Contact</h3>
            <ul class="footer-links">
                <li><i class="fas fa-phone"></i> +33 1 23 45 67 89</li>
                <li><i class="fas fa-envelope"></i> contact@vikingcruise.com</li>
                <li><i class="fas fa-map-marker-alt"></i> 123 Rue de la Mer, Paris</li>
            </ul>
        </div>
    </div>
    <p>&copy; 2025 - Viking Cruise</p>
  </footer>

  </body>
</html>
