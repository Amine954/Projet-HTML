<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fasta Åland | Viking Cruise</title>
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
        <img src="https://images.unsplash.com/photo-1590523177207-23bee1898db4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" alt="Archipel de Fasta Åland" />
        <div class="hero-text">
            <h2>À la découverte de l'archipel de Fasta Åland</h2>
            <p>Explorez ce joyau naturel finlandais où terre et mer s'entremêlent pour créer un paysage unique de plus de 6500 îles et îlots</p>
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
                <option value="interieure">Cabine Intérieure</option>
                <option value="exterieure">Cabine Extérieure</option>
                <option value="balcon">Cabine avec Balcon</option>
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
        <h2>À la découverte de l'archipel de Fasta Åland</h2>
        <div class="voyage-grid">
            <div class="voyage-item">
                <img src="https://images.unsplash.com/photo-1569265120507-0fd0ad6a44ee?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Paysages naturels de Fasta Åland">
                <div class="voyage-content">
                    <h3>Paysages naturels préservés</h3>
                    <p>Admirez la beauté naturelle de cet archipel finlandais avec ses forêts de pins, ses côtes rocheuses et ses eaux cristallines. Un paradis pour les amateurs de nature et de photographie.</p>
                </div>
            </div>
            <div class="voyage-item">
                <img src="https://images.unsplash.com/photo-1599912670267-5f8ad5901f0b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Villages côtiers">
                <div class="voyage-content">
                    <h3>Villages côtiers pittoresques</h3>
                    <p>Découvrez le charme des petits villages traditionnels de pêcheurs avec leurs maisons colorées, leurs ports pittoresques et leur atmosphère paisible qui témoignent d'un mode de vie insulaire préservé.</p>
                </div>
            </div>
            <div class="voyage-item">
                <img src="https://images.unsplash.com/photo-1624023954618-0e54efabc271?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Activités nautiques">
                <div class="voyage-content">
                    <h3>Activités nautiques</h3>
                    <p>Profitez des nombreuses possibilités d'exploration maritime : kayak entre les îlots, voile sur les eaux calmes, ou simplement baignade dans les criques isolées. Un paradis pour les amateurs d'activités nautiques.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="container_preparation">
        <h2>Types de parcours proposés</h2>
        <div class="prepare-cruise-content">
            <div class="prepare-box">
                <h3><i class="fas fa-compass"></i> Pass Liberté</h3>
                <p>Grâce à votre <strong>Pass Liberté</strong>, vous êtes totalement autonomes pour explorer l'archipel à votre rythme dès votre arrivée à quai. Profitez de cette escale pour découvrir les trésors locaux, savourer la gastronomie, flâner dans les villages ou visiter les sites incontournables.</p>
            </div>
            <div class="prepare-box">
                <h3><i class="fas fa-map-marked-alt"></i> Option Flex 1</h3>
                <p>Grâce à l'option <strong>Flex 1</strong>, explorez les incontournables de l'archipel avec un programme guidé d'une journée : découverte des villages côtiers, visite des sites historiques et pause dégustation de spécialités locales dans un cadre authentique.</p>
            </div>
            <div class="prepare-box">
                <h3><i class="fas fa-hotel"></i> Option Flex 2</h3>
                <p>Avec l'option <strong>Flex 2</strong>, profitez d'un séjour de 48h avec hébergement 4 étoiles. Jour 1 : exploration des sites principaux. Jour 2 : activités nautiques ou détente avec temps libre pour shopping ou découvertes personnelles.</p>
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
                    <p><strong>Formules de pension:</strong> Choisissez entre la pension complète, demi-pension ou petit-déjeuner pour savourer une cuisine raffinée à bord.</p>
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
        <h2>Découvrez Fasta Åland à votre façon</h2>
        <div id="texte-presentation" style="text-align: center; max-width: 800px; margin: 0 auto 40px;">
            <p>
                Découvrez l'archipel de Fasta Åland, ce joyau naturel finlandais où terre et mer s'entremêlent harmonieusement.
                Explorez ses paysages préservés, ses forêts verdoyantes et ses villages côtiers au charme authentique.
                Flânez dans les ports pittoresques où se balancent doucement les bateaux de pêche traditionnels.
                Amateurs de nature, aventurez-vous sur les sentiers côtiers et admirez la riche faune et flore locale lors d'une excursion guidée.
                Côté gastronomie, savourez les produits de la mer fraîchement pêchés dans l'un des restaurants typiques de l'archipel.
                L'archipel de Fasta Åland vous promet une escapade inoubliable entre authenticité et beauté naturelle.
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
                    <li><a href="#">Finlande</a></li>
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