<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nordhavn | Viking Cruise</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body id="accueil">
    
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
        <img src="https://ulysse.com/news/wp-content/uploads/2024/05/La-ville-de-Stockholm-en-Suede-.jpg" alt="Stockholm" />
        <div class="hero-text">
            <h2>Stockholm, la Venise du Nord</h2>
            <p>Découvrez la capitale suédoise construite sur 14 îles, où histoire et modernité s'entrelacent harmonieusement</p>
        </div>
    </div>

    <section class="best-voyages">
        <h2>Nordhavn</h2>
        <div class="voyage-grid">
            <div class="voyage-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROWZYKsEjOiCVK3OIVJ5V1StaCBNUjYyACbA&s" alt="Turku">
                <div class="voyage-content">
                    <h3>Turku</h3>
                    <p>Ancienne capitale de la Finlande, Turku est une ville portuaire charmante avec un château médiéval et une belle rivière qui traverse le centre. Ambiance tranquille et culturelle.</p>
                </div>
            </div>
            <div class="voyage-item">
                <img src="https://mb.cision.com/Public/396/3736964/8b0169dbac3d2ddb_org.jpg" alt="Vasaa">
                <div class="voyage-content">
                    <h3>Vasaa</h3>
                    <p>Ville côtière de l’ouest de la Finlande, Vaasa est bilingue (finnois et suédois) et tournée vers la mer. Elle est connue pour ses vents forts, son université et sa proximité avec la nature.</p>
                </div>
            </div>
            <div class="voyage-item">
                <img src="https://www.naturephotographie.com/wp-content/uploads/2017/03/Winter-Dreams.jpg" alt="Oulu">
                <div class="voyage-content">
                    <h3>Oulu</h3>
                    <p>Située au nord, Oulu est une ville moderne et technologique, connue pour ses innovations et ses hivers froids. C’est aussi un bon point de départ pour explorer la nature arctique.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="container_preparation">
        <h2>Types de parcours proposés</h2>
        <div class="prepare-cruise-content">
            <div class="prepare-box">
                <h3><i class="fas fa-compass"></i> Pass Liberté</h3>
                <p>Soyez totalement autonomes pour explorer chacune des villes à votre rythme. Découvrez les trésors locaux, savourez la gastronomie et visitez les sites incontournables selon vos envies.</p>
            </div>
            <div class="prepare-box">
                <h3><i class="fas fa-map-marked-alt"></i> Option Flex 1</h3>
                <p>Un programme guidé afin de découvrir les incontournables de Turku et explorer Oulu</p>
            </div>
            <div class="prepare-box">
                <h3><i class="fas fa-hotel"></i> Option Flex 2</h3>
                <p>Séjour de 48h avec hébergement 4 étoiles dans lequel vous pourrez profiter des merveilles de Vasaa, ville nichée dans les côtes finoises. </p>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <h2>Options de croisière</h2>
        <div class="testimonial-grid">
            <div class="testimonial-item">
                <div class="testimonial-content">
                    <p><strong>Wi-Fi à bord:</strong> Restez connecté où que vous soyez grâce à nos différentes formules Internet adaptées à vos besoins, à partir de 10€/jour.</p>
                </div>
                <div class="testimonial-author">
                    <i class="fas fa-wifi fa-2x" style="color: var(--accent);"></i>
                    <div class="author-info">
                        <h4>Connectivité</h4>
                        <p>Pour partager vos souvenirs en temps réel</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-content">
                    <p><strong>Formules de restauration:</strong> Choisissez entre la pension complète, demi-pension ou petit-déjeuner pour savourer une cuisine raffinée à bord.</p>
                </div>
                <div class="testimonial-author">
                    <i class="fas fa-utensils fa-2x" style="color: var(--accent);"></i>
                    <div class="author-info">
                        <h4>Gastronomie</h4>
                        <p>Des saveurs nordiques à découvrir</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-content">
                    <p><strong>Animaux acceptés:</strong> Voyagez avec votre fidèle compagnon pour 8€/jour et profitez d'espaces dédiés à son confort pendant votre croisière.</p>
                </div>
                <div class="testimonial-author">
                    <i class="fas fa-paw fa-2x" style="color: var(--accent);"></i>
                    <div class="author-info">
                        <h4>Animaux de compagnie</h4>
                        <p>Pour ne pas laisser votre compagnon</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="best-voyages">
        <h2>Découvrez Stockholm à votre façon</h2>
        <div id="texte-presentation" style="text-align: center; max-width: 800px; margin: 0 auto 40px;">
            <p>
                Découvrez Stockholm, la capitale suédoise construite sur 14 îles, où histoire et modernité s'entrelacent harmonieusement.
                Flânez dans le Gamla Stan, la vieille ville médiévale aux ruelles pavées et aux façades colorées, visitez le majestueux Palais Royal, et plongez dans l'histoire maritime au Musée Vasa.
                Amateurs de nature, explorez l'archipel de Stockholm et ses 30 000 îles lors d'une excursion en bateau.
                Côté gastronomie, savourez un smörgåsbord ou un kanelbulle lors d'une pause fika typiquement suédoise.
                Stockholm vous promet une escapade inoubliable.
            </p>
            <p style="margin-top: 20px; font-weight: 600; color: var(--accent);">
                <strong>Réservez dès maintenant votre croisière idéale et laissez-vous porter par l'aventure maritime ! 🚢✨</strong>
            </p>
        </div>

        <ul style="text-align: center; list-style-type: none;  width: 15%; margin: 0 auto;" class='boutonmenu' >
            <?php
                if (isset($_SESSION["statut"]) && ($_SESSION["statut"] === "connecte_admin" || $_SESSION["statut"] === "connecte_client")) {
                    echo "<li><a href='reservation.php'>Reserver ma croisière</a></li>";
                } 
                else {
                    echo "<li><a href='connexion.php'>Reserver ma croisière</a></li>"; 
                }
            ?>
        </ul>
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
