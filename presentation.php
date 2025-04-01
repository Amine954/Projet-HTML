<?php
	session_start();
?>

<!DOCTYPE html>
<html>
  <head>
  		<meta charset = "utf-8">
  		<html lang = "fr">
      	<title>Presentation | Viking Cruise</title>
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

	<div class="SearchBar">
		<form action="recherche.php" method="get">
			<label for="Recherche">🔍︎</label>
			<input type="text" name="query" placeholder="Rechercher"/> 
		</form>
	</div>
    <div>
    	<p class="Presentation"><b> Viking Cruise </b> <br />
    	<br />
    	Notre entreprise franco-marocaine vise à faire découvrir les différentes villes, pays 
    	et cultures autour de la <b>Mer Baltique</b>. Nous nous sommes investis de la mission de faire 
    	de la Mer Baltique LA mer incontournable pour les touristes du monde entier.  <br /> 
    	<br/>
    	</p>
    	<p class="Presentation">
    	<b> Un voyage inoubliable</b>
    	<br/>
    	<br/>

		<img id = "imgMerBaltique" alt="Une photo de la Mer Baltique" src="https://mediaim.expedia.com/destination/1/56a9d89a57059551e120c78efad8bb3e.jpg" 
		width = "60%" height = 600px/>
		<br/>
    	Découvrez de nombreux lieux touristiques comme Oslo, Stockholm, Riga, Copenhague, Tallin, 
    	Helsinki ou encore Saint-Petersbourg à bord d'un de nos navires de croisière. <br /> 
    	</p>
    </div>
    <div>
    </div>
    <div id=footer>
    	
    </div>
    <footer>
        <p>&copy; 2025 - Viking Cruise</p>
    </footer>
  </body>
</html>
