<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Présentation | Viking Cruise</title>
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
        <img src="https://images.unsplash.com/photo-1528155124528-06c125d81e89?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" alt="Mer Baltique" />
        <div class="hero-text">
            <h2>Découvrez Viking Cruise</h2>
            <p>Votre partenaire pour explorer les trésors cachés de la Mer Baltique</p>
        </div>
    </div>

    <div class="container" style="padding: 80px 5%; margin-top: -50px;">
        <div class="presentation-section">
            <h2>À propos de Viking Cruise</h2>
            <div class="presentation-content">
                <div class="presentation-text">
                    <p>Notre entreprise franco-marocaine vise à faire découvrir les différentes villes, pays et cultures autour de la <strong>Mer Baltique</strong>. Nous nous sommes investis de la mission de faire de la Mer Baltique, LA mer incontournable pour les touristes du monde entier.</p>
                    <p>Fondée par des passionnés de voyages et d'histoire nordique, Viking Cruise s'engage à offrir des expériences authentiques et inoubliables tout en respectant l'environnement et les cultures locales.</p>
                </div>
            </div>
        </div>
        </br>            
        <div class="presentation-section">
            <h2>Un voyage inoubliable</h2>
            </br>
            <div class="voyage-item" style="max-width: 100%; margin-bottom: 40px;">
                <img src="https://mediaim.expedia.com/destination/1/56a9d89a57059551e120c78efad8bb3e.jpg" alt="Une photo de la Mer Baltique" style="height: 500px;">
                <div class="voyage-content">
                    <p>Découvrez de nombreux lieux touristiques comme Oslo, Stockholm, Riga, Copenhague, Tallinn ou encore Helsinki à bord de nos navires de croisière.</p>
                    <p>Nos itinéraires soigneusement élaborés vous permettent de découvrir les plus beaux joyaux de la région baltique, des capitales scandinaves aux villes médiévales baltes.</p>
                </div>
            </div>
        </div>

        <div class="presentation-section">
            <h2>Nos valeurs</h2>
            <div class="prepare-cruise-content">
                <div class="prepare-box">
                    <h3><i class="fas fa-leaf"></i> Respect de l'environnement</h3>
                    <p>Nous nous engageons à minimiser notre impact écologique avec des navires modernes et respectueux de l'environnement marin.</p>
                </div>
                <div class="prepare-box">
                    <h3><i class="fas fa-handshake"></i> Authenticité culturelle</h3>
                    <p>Nous valorisons les rencontres authentiques avec les populations locales et la découverte des traditions régionales.</p>
                </div>
                <div class="prepare-box">
                    <h3><i class="fas fa-users"></i> Expérience client</h3>
                    <p>Notre équipe attentionnée veille à votre confort et votre satisfaction tout au long de votre croisière.</p>
                </div>
            </div>
        </div>

        <div class="presentation-section" id="navires">
            <h2>Notre flotte</h2>
            <div class="voyage-grid">
                <div class="voyage-item">
                    <img src="https://www.sales.vikingline.com/globalassets/images/ships_and_onboard/grace/exterior/viking-grace-18414-812x501.jpg" alt="Navire Nordic Star">
                    <div class="voyage-content">
                        <h3>Nordic Star</h3>
                        <p>Notre navire amiral offre un confort inégalé avec ses suites spacieuses et ses nombreux équipements de loisirs.</p>
                    </div>
                </div>
                <div class="voyage-item">
                    <img src="https://www.shippax.com/backnet/media_archive/cache/27d561c99cc2d68ed655f4bb6893c70d_1200x630.jpg" alt="Navire Baltic Explorer">
                    <div class="voyage-content">
                        <h3>Baltic Explorer</h3>
                        <p>Conçu pour les explorations en eaux peu profondes, il permet d'accéder à des ports exclusifs inaccessibles aux grands navires.</p>
                    </div>
                </div>
                <div class="voyage-item">
                    <img src="https://q-xx.bstatic.com/xdata/images/hotel/max1024x768/309446322.jpg?k=d1f12b4bb3b4e8126b60b8e61629ca935c8cfd52b7f13ef6e463c1a85e5f2fe9&o=" alt="Navire Fjord Princess">
                    <div class="voyage-content">
                        <h3>Fjord Princess</h3>
                        <p>Navire premium offrant une expérience intime avec seulement 200 passagers et un service hautement personnalisé.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="SearchBar">
        <form action="recherche.php" method="get">
            <label for="Recherche"><i class="fas fa-search"></i></label>
            <input type="text" name="query" placeholder="Rechercher un itinéraire ou une destination"/> 
        </form>
    </div>

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
