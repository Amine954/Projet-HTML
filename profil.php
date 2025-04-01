<?php
	session_start();
?>

<!DOCTYPE html>
<html>
  <head>
  		<meta charset = "utf-8">
  		<html lang = "fr">
      	<title>Profil | Viking Cruise</title>
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
                }
                else{
                    echo "<button class='boutonmenu'><a href='inscription.php'>Inscription</a></button>";
                    echo "<button class='boutonmenu'><a href='connexion.php'>Connexion</a></button>";
                }
            ?>
        </div>
    </nav>

    <div>
      <div>
        <h3>Informations :</h3>
        </br>
      </div>
      <div class="InfoProfil">
        Nom :
        <button class="EditProfil" ><img class="EditProfilImg" alt="Bouton edition profil" src="https://cdn-icons-png.flaticon.com/512/266/266146.png"/></button>
        </br>
      </div>
      <div class="InfoProfil">
        Prenom :
        <button class="EditProfil" ><img class="EditProfilImg" alt="Bouton edition profil" src="https://cdn-icons-png.flaticon.com/512/266/266146.png"/></button>
        </br>
      </div>
      <div class="InfoProfil">
        Email :
        <button class="EditProfil" ><img class="EditProfilImg" alt="Bouton edition profil" src="https://cdn-icons-png.flaticon.com/512/266/266146.png"/></button>
        </br>
      </div>
      <div class="InfoProfil">
        Mot de passe :
        <button class="EditProfil" ><img class="EditProfilImg" alt="Bouton edition profil" src="https://cdn-icons-png.flaticon.com/512/266/266146.png"/></button>
        </br>
      </div>
      <div class="InfoProfil">
        Téléphone :
        <button class="EditProfil" ><img class="EditProfilImg" alt="Bouton edition profil" src="https://cdn-icons-png.flaticon.com/512/266/266146.png"/></button>
        </br>
      </div>
      <div class="InfoProfil">
        Reservation :
        <button class="EditProfil" ><img class="EditProfilImg" alt="Bouton edition profil" src="https://cdn-icons-png.flaticon.com/128/54/54324.png"/></button>
        </br>
      </div>
      <div class="InfoProfil">
        VIP :
        </br>
      </div>
    </div>
    <footer>
        <p>&copy; 2025 - Viking Cruise</p>
    </footer>
  </body>
</html>
