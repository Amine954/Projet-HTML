<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viking Cruise | Recherche de Croisières</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
        <img src="https://www.wwf.fr/sites/default/files/styles/page_cover_large_16_9/public/2023-06/coucher-soleil-mer-baltique.jpg?h=561fe1eb&itok=WTKsVQty" alt="Vue aérienne de la mer Baltique" />
        <div class="hero-text">
            <h2>Découvrez nos croisières</h2>
            <p>Explorez notre collection de voyages exceptionnels à travers la mer Baltique</p>
        </div>
    </div>

    <div id="informations">
        <div class="info-formulaires">
            <label for="pays"><i class="fas fa-globe-europe"></i> Au départ de </label>
            <select name="pays" id="pays">
                <option value="">Choisir une ville</option>
                <option value="st">Stockholm</option>
                <option value="co">Copenhague</option>
                <option value="os">Oslo</option>
            </select>      
        </div>
        
        <div class="info-formulaires">
            <label for="date_de_depart"><i class="far fa-calendar-alt"></i> Date de départ</label>
            <input type="date" name="date_de_depart" id="date_de_depart" />
        </div>
        
        <div class="info-formulaires">
            <label for="recherche"><i class="fas fa-search"></i> Mot-clé</label>
            <input type="text" id="recherche" name="recherche" placeholder="Rechercher une destination..." />
        </div>
        
        <div class="info-formulaires">
            <button class="cta-button">Rechercher</button>
        </div>
    </div>

    <section class="best-voyages">
        <h2>Nos voyages disponibles</h2>
        <div class="voyage-grid">
            <?php
            $fichier_voy = fopen("donnees/voyages.csv", "r") or die("Impossible d'ouvrir le fichier !");

                while(!feof($fichier_voy)){

                    $voy = fgets($fichier_voy);
                    //Si la ligne n'est pas vide (une ligne vide a un caractère " " et "\n" d'où >2)
                    if(strlen($voy) > 2){

                                
                $infos_voy = str_getcsv($voy, ";", " ");
                
                $nom = $infos_voy[0];
                $prix = $infos_voy[1];
                $presentation = $infos_voy[4];
                $lien = $infos_voy[5];

                echo '<div class="voyage-item">';
                echo   '<img src="'. $lien .'"alt="'. $nom .'">';
                echo   '<div class="voyage-content">';
                echo        '<h3>'. $nom .'</h3>';
                echo        '<p>' . $presentation .' </p>';
                echo        '<p class="voyage-price">À partir de : '. $prix .' / nuit</p>';
                echo            '<div class="voyage-buttons">';
                echo                '<a href="'. strtolower($nom) .'.php" class="boutonmenu">En savoir plus</a>';
                echo                '<a href="reservation.php" class="boutonmenu">Réserver</a>';
                echo            '</div>';
                echo    '</div>';
                echo '</div>';    
            }
        }

        fclose($fichier_voy);
        ?> 
            
        </div>
    </section>

    <section class="container_preparation">
        <h2>Services inclus dans nos croisières</h2>
        <div class="prepare-cruise-content">
            <div class="prepare-box">
                <h3><i class="fas fa-utensils"></i> Restauration premium</h3>
                <p>Profitez d'une cuisine raffinée à bord avec des spécialités nordiques et internationales préparées par nos chefs.</p>
            </div>
            <div class="prepare-box">
                <h3><i class="fas fa-cocktail"></i> Bars et lounges</h3>
                <p>Détendez-vous dans nos espaces conviviaux avec une vue panoramique sur la mer et dégustez nos cocktails signature.</p>
            </div>
            <div class="prepare-box">
                <h3><i class="fas fa-spa"></i> Bien-être & spa</h3>
                <p>Ressourcez-vous dans notre spa nordique avec sauna, bain à remous et soins inspirés des traditions scandinaves.</p>
            </div>
            <div class="prepare-box">
                <h3><i class="fas fa-map-marked-alt"></i> Excursions guidées</h3>
                <p>Découvrez les joyaux culturels et naturels de chaque escale avec nos guides locaux expérimentés.</p>
            </div>
        </div>
    </section>

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
