<?php
session_start()
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helsinki | Viking Cruise</title>
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
        <img src="https://images.unsplash.com/photo-1507297230445-ff678f10b524?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" alt="Helsinki, Finlande" />
        <div class="hero-text">
            <h2>Helsinki, perle de la Baltique</h2>
            <p>Découvrez la capitale finlandaise, entre architecture néoclassique, culture du design et nature omniprésente</p>
        </div>
    </div>

    <div id="informations">
        <div class="info-formulaires">
            <label for="duree"><i class="far fa-calendar-alt"></i> Durée</label>
            <select name="duree" id="duree">
                <option value="14">14 jours</option>
                <option value="21">21 jours</option>
            </select>      
        </div>
        
        <div class="info-formulaires">
            <label for="typesCabines"><i class="fas fa-bed"></i> Types de cabines</label>
            <select name="typesCabines" id="typesCabines">
                <option value="ee">Cabine Intérieure</option>
                <option value="lv">Cabine Extérieure</option>
                <option value="lt">Cabine avec Balcon</option>
            </select>
        </div>
        
        <div class="info-formulaires">
            <label for="nbCabines"><i class="fas fa-door-closed"></i> Nombre de cabines</label>
            <input type="number" id="nbCabines" name="nbCabines" min="1" max="6" placeholder="1-6 cabines" />
        </div>
        
        <div class="info-formulaires">
            <button class="cta-button">Réserver</button>
        </div>
    </div>

    <section class="best-voyages">
        <h2>À la découverte d'Helsinki</h2>
        <div class="voyage-grid">
            <div class="voyage-item">
                <img src="https://images.unsplash.com/photo-1559499552-8b49d31c4834?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Cathédrale d'Helsinki">
                <div class="voyage-content">
                    <h3>Cathédrale d'Helsinki</h3>
                    <p>Admirez ce chef-d'œuvre néoclassique emblématique de la ville avec son dôme blanc et ses colonnes imposantes, dominant la Place du Sénat.</p>
                </div>
            </div>
            <div class="voyage-item">
                <img src="https://images.unsplash.com/photo-1526137914483-2d0ea8173e51?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Suomenlinna">
                <div class="voyage-content">
                    <h3>Forteresse de Suomenlinna</h3>
                    <p>Explorez cette impressionnante forteresse maritime inscrite au patrimoine mondial de l'UNESCO, accessible par un court trajet en ferry depuis le port d'Helsinki.</p>
                </div>
            </div>
            <div class="voyage-item">
                <img src="https://images.unsplash.com/photo-1580218102456-342d3c047b11?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Design District">
                <div class="voyage-content">
                    <h3>Quartier du Design</h3>
                    <p>Découvrez pourquoi Helsinki est reconnue comme capitale mondiale du design en explorant ses boutiques uniques, galeries et le célèbre musée du Design.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="container_preparation">
        <h2>Types de parcours proposés</h2>
        <div class="prepare-cruise-content">
            <div class="prepare-box">
                <h3><i class="fas fa-compass"></i> Pass Liberté</h3>
                <p>Soyez totalement autonomes pour explorer Helsinki à votre rythme. Découvrez les trésors locaux, savourez la gastronomie finlandaise et visitez les sites incontournables selon vos envies.</p>
            </div>
            <div class="prepare-box">
                <h3><i class="fas fa-map-marked-alt"></i> Option Flex 1</h3>
                <p>Un programme guidé d'une journée pour découvrir les incontournables: la Cathédrale, le marché couvert Vanha Kauppahalli, Suomenlinna et une pause café dans une institution locale.</p>
            </div>
            <div class="prepare-box">
                <h3><i class="fas fa-hotel"></i> Option Flex 2</h3>
                <p>Séjour de 48h avec hébergement 4 étoiles. Jour 1: découverte du centre historique. Jour 2: immersion dans la culture finlandaise avec visite d'un sauna traditionnel et temps libre.</p>
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
        <h2>Découvrez Helsinki à votre façon</h2>
        <div id="texte-presentation" style="text-align: center; max-width: 800px; margin: 0 auto 40px;">
            <p>
                Découvrez Helsinki, la capitale finlandaise où modernité et tradition se rencontrent dans un cadre maritime enchanteur.
                Admirez l'architecture néoclassique de la Place du Sénat et de sa majestueuse cathédrale blanche, explorez l'impressionnante forteresse maritime de Suomenlinna, et imprégnez-vous de la culture du design finlandais dans les nombreuses boutiques et galeries.
                Amateurs de nature, profitez des nombreux parcs et du front de mer, ou partez en excursion dans l'archipel environnant aux paysages spectaculaires.
                Côté gastronomie, savourez les spécialités locales au marché couvert ou offrez-vous une expérience typiquement finlandaise dans un sauna traditionnel.
                Helsinki vous promet une escapade entre design, nature et culture nordique.
            </p>
            <p style="margin-top: 20px; font-weight: 600; color: var(--accent);">
                <strong>Réservez dès maintenant votre croisière idéale et laissez-vous porter par l'aventure maritime ! 🚢✨</strong>
            </p>
        </div>
        <div style="text-align: center;">
            <button class="cta-button">Réserver ma croisière</button>
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
                    <li><a href="stockholm.php">Suède</a></li>
                    <li><a href="copenhague.php">Danemark</a></li>
                    <li><a href="#">Norvège</a></li>
                    <li><a href="helsinki.php">Finlande</a></li>
                    <li><a href="tallinn.php">Estonie</a></li>
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