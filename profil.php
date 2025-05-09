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
    </header>

    
    <div id="main">
    <img src="https://images.unsplash.com/photo-1548574505-5e239809ee19?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2071&q=80" alt="Vue aérienne de la mer Baltique" />
      <div class="hero-text">
          <h2>Mon profil</h2>
          <p>Pour votre sécurité ne divulguez pas votre mot de passe</p>
      </div>
    </div>

    <main>
      <div>
        <div>
          <h3>Profil :</h3>
          </br>
        </div>
        <div class="InfoProfil">
          <?php
            echo "Nom: " . $_SESSION["nom"];
          ?>
          <button class="EditProfil" ></button>
          </br>
        </div>
        <div class="InfoProfil">
          <?php
            echo "Prenom: " . $_SESSION["prenom"];
          ?>
          <button class="EditProfil" ></button>
          </br>
        </div>
        <div class="InfoProfil">
          <?php
            echo "Email: " . $_SESSION["email"];
          ?>
          <button class="EditProfil" ></button>
          </br>
        </div>
        <div class="InfoProfil">
          <?php
            echo "Mot de passe: " . $_SESSION["mdp"];
          ?>
          <button class="EditProfil" ></button>
          </br>
        </div>
        <div class="InfoProfil">
          <?php
            echo "Tel: " . $_SESSION["tel"];
          ?>
          <button class="EditProfil" ></button>
          </br>
        </div>
        <div class="InfoProfil">
          Reservation :
          <button class="EditProfil" ></button>
          </br>
        </div>
        <div class="InfoProfil">
          VIP :
          </br>
        </div>
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
        <div class="copyright">
            <p>&copy; 2025 - Viking Cruise | Tous droits réservés</p>
        </div>
    </footer>
  </body>
</html>
