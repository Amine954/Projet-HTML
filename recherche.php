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
        <img src="https://images.unsplash.com/photo-1548574505-5e239809ee19?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2071&q=80" alt="Vue aérienne de la mer Baltique" />
        <div class="hero-text">
            <h2>Découvrez nos croisières</h2>
            <p>Explorez notre collection de voyages exceptionnels à travers la mer Baltique</p>
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
            <div class="voyage-item">
                <img src="https://images.unsplash.com/photo-1509356843151-3e7d96241e11?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Stockholm">
                <div class="voyage-content">
                    <h3>🇸🇪 Suède - Stockholm</h3>
                    <p>Explorez Stockholm et ses magnifiques archipels. Profitez d'une croisière au cœur de la Scandinavie.</p>
                    <p class="voyage-price">À partir de : 150€ / nuit</p>
                    <div class="voyage-buttons">
                        <a href="stockholm.php" class="boutonmenu">En savoir plus</a>
                        <a href="reservation.php" class="boutonmenu">Réserver</a>
                    </div>
                </div>
            </div>
            
            <div class="voyage-item">
                <img src="https://images.unsplash.com/photo-1513622470522-26c3c8a854bc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Copenhague">
                <div class="voyage-content">
                    <h3>🇩🇰 Danemark - Copenhague</h3>
                    <p>Découvrez la capitale danoise avec ses canaux et son atmosphère chaleureuse. Une ville entre tradition et modernité.</p>
                    <p class="voyage-price">À partir de : 130€ / nuit</p>
                    <div class="voyage-buttons">
                        <a href="copenhague.php" class="boutonmenu">En savoir plus</a>
                        <a href="reservation.php" class="boutonmenu">Réserver</a>
                    </div>
                </div>
            </div>
            
            <div class="voyage-item">
                <img src="https://images.unsplash.com/photo-1633507104446-49b712c638ec?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="Tallinn">
                <div class="voyage-content">
                    <h3>🇪🇪 Estonie - Tallinn</h3>
                    <p>Promenez-vous dans la vieille ville médiévale de Tallinn, où chaque rue raconte une histoire.</p>
                    <p class="voyage-price">À partir de : 120€ / nuit</p>
                    <div class="voyage-buttons">
                        <a href="tallinn.php" class="boutonmenu">En savoir plus</a>
                        <a href="reservation.php" class="boutonmenu">Réserver</a>
                    </div>
                </div>
            </div>
            
            <div class="voyage-item">
                <img src="https://images.unsplash.com/photo-1564517945244-d371c925640b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="Helsinki">
                <div class="voyage-content">
                    <h3>🇫🇮 Finlande - Helsinki</h3>
                    <p>Helsinki, la perle du Nord, offre un mélange unique d'architecture et de nature préservée.</p>
                    <p class="voyage-price">À partir de : 140€ / nuit</p>
                    <div class="voyage-buttons">
                        <a href="helsinki.php" class="boutonmenu">En savoir plus</a>
                        <a href="reservation.php" class="boutonmenu">Réserver</a>
                    </div>
                </div>
            </div>
            
            <div class="voyage-item">
                <img src="https://images.unsplash.com/photo-1651143978201-edbd00a19b04?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="Gotland">
                <div class="voyage-content">
                    <h3>🇸🇪 À la découverte de Gotland</h3>
                    <p>Gotland offre une nature préservée, des villages charmants et une riche histoire maritime.</p>
                    <p class="voyage-price">À partir de : 170€ / nuit</p>
                    <div class="voyage-buttons">
                        <a href="gotland.php" class="boutonmenu">En savoir plus</a>
                        <a href="reservation.php" class="boutonmenu">Réserver</a>
                    </div>
                </div>
            </div>
            
            <div class="voyage-item">
                <img src="https://images.unsplash.com/photo-1593015101115-ee4ac05273b8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Fasta Åland">
                <div class="voyage-content">
                    <h3>🇫🇮 À la découverte de Fasta Åland</h3>
                    <p>Fasta Åland offre une nature préservée, des villages charmants et une riche histoire maritime.</p>
                    <p class="voyage-price">À partir de : 170€ / nuit</p>
                    <div class="voyage-buttons">
                        <a href="Fasta_Åland.php" class="boutonmenu">En savoir plus</a>
                        <a href="reservation.php" class="boutonmenu">Réserver</a>
                    </div>
                </div>
            </div>
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