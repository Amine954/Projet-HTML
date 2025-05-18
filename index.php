<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viking Cruise | Croisières en Mer Baltique</title>
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
        <img src="https://bloomassociation.org/wp-content/uploads/2024/07/image-suede.jpg" alt="Croisière Viking" />
        <div class="hero-text">
            <h2>Explorez la Mer Baltique</h2>
            <p>Embarquez pour un voyage inoubliable à travers les joyaux historiques et paysages spectaculaires du Nord de l'Europe</p>
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
            <label for="personnes"><i class="fas fa-users"></i> Voyageurs</label>
            <input type="number" id="personnes" name="personnes" min="1" max="30" placeholder="Nombre de personnes" />
        </div>
        
        <div class="info-formulaires">
            <button class="cta-button">Rechercher</button>
        </div>
    </div>

    <section class="best-voyages">
        <h2>Nos destinations populaires</h2>
        <div class="voyage-grid">
            <div class="voyage-item">
                <img src="https://www.nordic.be/wp-content/uploads/2021/05/Sognefjord-bezoek-de-Noorse-fjorden-met-Nordic-1.jpg" alt="fjorddrakkar">
                <div class="voyage-content">
                    <h3>🇩🇰 Fjorddrakkar</h3>
                    <p>La côte ouest de la Norvège mêle fjords majestueux, montagnes et villages paisibles, parfaite pour nature et aventure</p>
                    <div class="voyage-buttons">
                        <a href="fjorddrakkar.php" class="boutonmenu">Explorer</a>
                    </div>
                </div>
            </div>
            <div class="voyage-item">
                <img src="https://images.salaun-holidays.com//(Vignette)-vignette-Estonie-Tallinn-panorama-36-fo_77668323-09032017.jpg" alt="Yggdrasil">
                <div class="voyage-content">
                    <h3>🇫🇮 Yggdrasil</h3>
                    <p>Faites le tour des capitales des pays Baltes</p>
                    <div class="voyage-buttons">
                        <a href="yggdrasil.php" class="boutonmenu">Explorer</a>
                    </div>
                </div>
            </div>
            <div class="voyage-item">
                <img src="https://img.freepik.com/photos-premium/coucher-soleil-cramoisi-fond-du-golfe-botnie-finlande_564276-11717.jpg" alt="nordhavn">
                <div class="voyage-content">
                    <h3>🇸🇪 Nordhavn</h3>
                    <p>Explorez Stockholm et traversez le Golfe de Botnie, entre forêts, lacs et douceur nordique, parfait pour une immersion paisible</p>
                    <div class="voyage-buttons">
                        <a href="nordhavn.php" class="boutonmenu">Explorer</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<section class="container_preparation">
        <h2>Préparez votre croisière</h2>
        <div class="prepare-cruise-content">
            <div class="prepare-box">
                <h3><i class="fas fa-suitcase"></i> Bagages et équipements</h3>
                <p>Pensez à emporter des tenues adaptées aux différentes escales et activités à bord. Notre guide vous aidera à faire vos valises efficacement.</p>
            </div>
            <div class="prepare-box">
                <h3><i class="fas fa-passport"></i> Documents de voyage</h3>
                <p>Assurez-vous d'avoir votre passeport, carte d'identité, billets de croisière et visas nécessaires pour l'ensemble des pays visités.</p>
            </div>
            <div class="prepare-box">
                <h3><i class="fas fa-map-marked-alt"></i> Excursions et activités</h3>
                <p>Réservez vos excursions à l'avance pour garantir votre place et ne rien manquer des meilleures attractions de chaque destination.</p>
            </div>
            <div class="prepare-box">
                <h3><i class="fas fa-ship"></i> Vie à bord</h3>
                <p>Découvrez les restaurants, bars, spectacles et services pour profiter pleinement de votre séjour et vivre une expérience inoubliable.</p>
            </div>
            <div class="prepare-box">
                <h3><i class="fas fa-clipboard-check"></i> Formalités d'embarquement</h3>
                <p>Vérifiez l'heure d'embarquement, les procédures de sécurité et préparez vos documents à l'avance pour un départ sans stress.</p>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <h2>Ce que disent nos voyageurs</h2>
        <div class="testimonial-grid">
            <div class="testimonial-item">
                <div class="testimonial-content">
                    <p>Notre croisière en mer Baltique a été une révélation. Les villes visitées sont magnifiques et le service à bord était exceptionnel.</p>
                </div>
                <div class="testimonial-author">
                    <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Sophie M.">
                    <div class="author-info">
                        <h4>Sophie M.</h4>
                        <p>Croisière Nordhavn</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-content">
                    <p>Une expérience inoubliable ! Des paysages à couper le souffle et un confort inégalé sur le navire. Nous reviendrons !</p>
                </div>
                <div class="testimonial-author">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Marc L.">
                    <div class="author-info">
                        <h4>Marc L.</h4>
                        <p>Croisière Fjorddrakkar</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-content">
                    <p>Les excursions proposées étaient variées et enrichissantes. J'ai particulièrement apprécié la visite de Tallinn, une ville fascinante.</p>
                </div>
                <div class="testimonial-author">
                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Claire D.">
                    <div class="author-info">
                        <h4>Claire D.</h4>
                        <p>Croisière Yggdrasil</p>
                    </div>
                </div>
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
