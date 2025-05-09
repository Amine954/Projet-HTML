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
        <img src="https://images.unsplash.com/photo-1596394723269-d701d6bda6c9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" alt="Croisière Viking" />
        <div class="hero-text">
            <h2>Explorez la Mer Baltique</h2>
            <p>Embarquez pour un voyage inoubliable à travers les joyaux historiques et paysages spectaculaires du Nord de l'Europe</p>
        </div>
    </div>

    <div id="informations">
        <div class="info-formulaires">
            <label for="pays"><i class="fas fa-globe-europe"></i> Destination</label>
            <select name="pays" id="pays">
                <option value="">Choisir un pays</option>
                <option value="ee">Estonie</option>
                <option value="lv">Lettonie</option>
                <option value="lt">Lituanie</option>
                <option value="pl">Pologne</option>
                <option value="no">Norvège</option>
                <option value="de">Allemagne</option>
                <option value="se">Suède</option>
                <option value="fi">Finlande</option>
                <option value="ru">Russie</option>
                <option value="dk">Danemark</option>
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
        <h2>Destinations populaires</h2>
        <div class="voyage-grid">
            <div class="voyage-item">
                <img src="https://images.unsplash.com/photo-1513622470522-26c3c8a854bc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Stockholm">
                <div class="voyage-content">
                    <h3>Stockholm, Suède</h3>
                    <p>Découvrez Stockholm, la "Venise du Nord", avec ses magnifiques archipels et son centre historique médiéval.</p>
                    <a href="stockholm.php" class="boutonmenu">Explorer</a>
                </div>
            </div>
            <div class="voyage-item">
                <img src="https://images.unsplash.com/photo-1513622470522-26c3c8a854bc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Copenhague">
                <div class="voyage-content">
                    <h3>Copenhague, Danemark</h3>
                    <p>Profitez d'une croisière unique entre tradition et modernité dans la capitale la plus heureuse d'Europe.</p>
                    <a href="copenhague.php" class="boutonmenu">Explorer</a>
                </div>
            </div>
            <div class="voyage-item">
                <img src="https://images.unsplash.com/photo-1633507104446-49b712c638ec?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="Tallinn">
                <div class="voyage-content">
                    <h3>Tallinn, Estonie</h3>
                    <p>Un voyage enchanteur dans la vieille ville médiévale de Tallinn, classée au patrimoine mondial de l'UNESCO.</p>
                    <a href="tallinn.php" class="boutonmenu">Explorer</a>
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
                        <p>Croisière Trésors Baltiques</p>
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
                        <p>Croisière Fjords Norvégiens</p>
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
                        <p>Croisière Capitales Baltiques</p>
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