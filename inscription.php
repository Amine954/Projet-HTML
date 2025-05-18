<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription | Viking Cruise</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="connexion.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
            <h2>Inscrivez-vous</h2>
            <p>Pour votre sécurité ne divulguez jamais votre mot de passe</p>
        </div>
    </div>
    <main>
        <div class="form-container-box">
            <div class="form-header">
                <h2>Rejoignez l'aventure Viking</h2>
                <p>Créez votre compte et embarquez pour des croisières inoubliables</p>
            </div>
            
            <div class="form-box">
                <form id="reservationformulaire" action="enregistrement_inscription.php" method="POST">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="nom"><i class="fas fa-user"></i> Nom</label>
                            <input type="text" id="nom" name="nom" placeholder="Votre nom" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="prenom"><i class="fas fa-user"></i> Prénom</label>
                            <input type="text" id="prenom" name="prenom" placeholder="Votre prénom" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="email"><i class="fas fa-envelope"></i> Email</label>
                            <input type="email" id="email" name="email" placeholder="votre.email@exemple.com" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="telephone"><i class="fas fa-phone"></i> Téléphone</label>
                            <input type="tel" id="telephone" name="telephone" placeholder="+33 6 12 34 56 78" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="mot_de_passe"><i class="fas fa-lock"></i> Mot de passe</label>
                            <input type="password" id="mot_de_passe" name="mot_de_passe" placeholder="Créez un mot de passe sécurisé" required>
                            <span onclick="togglePasswordVisibility('mot_de_passe')">👁️</span>
                        </div>
                        
                        <div class="form-group">
                            <label for="confirmation_mot_de_passe"><i class="fas fa-lock"></i> Confirmer le mot de passe</label>
                            <input type="password" id="confirmation_mot_de_passe" name="confirmation_mot_de_passe" placeholder="Confirmez votre mot de passe" required>
                            <span onclick="togglePasswordVisibility('confirmation_mot_de_passe')">👁️</span>
                        </div>
                    </div>
                    
                    <div class="consent-box">
                        <input type="checkbox" id="conditions" name="conditions" required>
                        <label for="conditions">En créant un compte, je confirme avoir lu et accepté les conditions d'utilisation et la politique de confidentialité de Viking Cruise.</label>
                    </div>
                    
                    <div class="form-submit">
                        <button type="submit" class="cta-button"><i class="fas fa-ship"></i> Créer mon compte</button>
                    </div>
                    
                    <div style="text-align: center; margin-top: 25px;">
                        <p>Déjà un compte ? <a href="connexion.php" style="color: var(--secondary); text-decoration: underline;">Connectez-vous ici</a></p>
                    </div>

                    <?php 
                        if(isset($_GET['error']) && $_GET['error']){
                            echo "<p style='color:red; text-align:center'>Email déjà pris</p>";
                        }
                    ?>
                </form>
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
                    <li><a href="nordhavn.php">Nordhavn</a></li>
                    <li><a href="fjorddrakkar.php">Fjorddrakkar</a></li>
                    <li><a href="yggdrasil.php">Yggdrasil</a></li>
                    <li><a href="solstorm.php">Solstorm</a></li>
                    <li><a href="valkyra.php">Valkyra</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Informations</h3>
                <ul class="footer-links">
                    <li><a href="presentation.php">À propos de nous</a></li>
                    <li><a href="presentation.php#navires">Nos navires</a></li>
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