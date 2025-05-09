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
        <h2>À propos de Viking Cruise</h2>
        <div class="voyage-grid">
            <div class="voyage-item" style="flex: 0 1 100%; max-width: 100%;">
                <div class="voyage-content">
                    <p>Notre entreprise franco-marocaine vise à faire découvrir les différentes villes, pays et cultures autour de la <strong>Mer Baltique</strong>. Nous nous sommes investis de la mission de faire de la Mer Baltique LA mer incontournable pour les touristes du monde entier.</p>
                    <p>Fondée par des passionnés de voyages et d'histoire nordique, Viking Cruise s'engage à offrir des expériences authentiques et inoubliables tout en respectant l'environnement et les cultures locales.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="best-voyages">
        <h2>Un voyage inoubliable</h2>
        <div class="voyage-grid">
            <div class="voyage-item" style="flex: 0 1 100%; max-width: 100%;">
                <img src="https://mediaim.expedia.com/destination/1/56a9d89a57059551e120c78efad8bb3e.jpg" alt="Une photo de la Mer Baltique" style="height: 500px;">
                <div class="voyage-content">
                    <p>Découvrez de nombreux lieux touristiques comme Oslo, Stockholm, Riga, Copenhague, Tallinn, Helsinki ou encore Saint-Pétersbourg à bord d'un de nos navires de croisière.</p>
                    <p>Nos itinéraires soigneusement élaborés vous permettent de découvrir les plus beaux joyaux de la région baltique, des capitales scandinaves aux villes médiévales baltes.</p>
                </div>
            </div>
        </div>
    </section>

	<section class="form-container-box">
    <div class="form-header">
        <h2>Réservez votre aventure en mer Baltique</h2>
        <p>Embarquez pour un voyage d'exception et découvrez les trésors du Nord</p>
    </div>

    <div class="info-formulaires">
        <form id="reservationFormulaire" action="reservation_process.php" method="POST">
            <div class="form-row">
                <div class="form-group">
                    <label for="nom"><i class="fas fa-user"></i> Nom et prénom</label>
                    <input type="text" id="nom" name="nom" placeholder="Votre nom complet" required>
                </div>
                
                <div class="form-group">
                    <label for="email"><i class="fas fa-envelope"></i> Email</label>
                    <input type="email" id="email" name="email" placeholder="Votre adresse email" required>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="telephone"><i class="fas fa-phone"></i> Téléphone</label>
                    <input type="tel" id="telephone" name="telephone" placeholder="Votre numéro de téléphone" required>
                </div>
                
                <div class="form-group">
                    <label for="date"><i class="far fa-calendar-alt"></i> Date de départ</label>
                    <input type="date" id="date" name="date" required>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="destination"><i class="fas fa-globe-europe"></i> Destination</label>
                    <select name="destination" id="destination" required>
                        <option value="" disabled selected>Choisir une destination</option>
                        <option value="capitals">Capitales Baltiques</option>
                        <option value="fjords">Fjords Norvégiens</option>
                        <option value="baltic">Trésors Baltiques</option>
                        <option value="hidden">Trésors Cachés</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="duree"><i class="fas fa-clock"></i> Durée de la croisière</label>
                    <select name="duree" id="duree" required>
                        <option value="" disabled selected>Choisir une durée</option>
                        <option value="7">7 jours</option>
                        <option value="14">14 jours</option>
                        <option value="21">21 jours</option>
                    </select>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="cabine"><i class="fas fa-bed"></i> Type de cabine</label>
                    <select name="cabine" id="cabine" required>
                        <option value="" disabled selected>Choisir une cabine</option>
                        <option value="standard">Cabine Standard</option>
                        <option value="balcon">Cabine avec Balcon</option>
                        <option value="suite">Suite</option>
                        <option value="deluxe">Suite Deluxe</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="personnes"><i class="fas fa-users"></i> Nombre de voyageurs</label>
                    <input type="number" id="personnes" name="personnes" min="1" max="10" placeholder="Nombre de personnes" required>
                </div>
            </div>
            
            <div class="form-group full-width">
                <label for="message"><i class="fas fa-comment"></i> Demandes spéciales (optionnel)</label>
                <textarea id="message" name="message" placeholder="Régimes alimentaires spéciaux, besoins d'accessibilité, ou autres demandes"></textarea>
            </div>
            
            <div class="form-group consent-box">
                <input type="checkbox" id="consent" name="consent" required>
                <label for="consent">J'accepte les <a href="#">conditions générales</a> et la <a href="#">politique de confidentialité</a></label>
            </div>
            
            <div class="form-submit">
                <button type="submit" class="cta-button"><i class="fas fa-ship"></i> Embarquer pour l'aventure</button>
            </div>
        </form>
    </div>
</section>

    <section class="testimonials">
        <h2>Ce que disent nos voyageurs</h2>
        <div class="testimonial-grid">
            <div class="testimonial-item">
                <div class="testimonial-content">
                    <p>Viking Cruise a transformé notre voyage en Scandinavie en une expérience de découverte extraordinaire. Chaque détail était parfait !</p>
                </div>
                <div class="testimonial-author">
                    <img src="https://randomuser.me/api/portraits/women/33.jpg" alt="Marie L.">
                    <div class="author-info">
                        <h4>Marie L.</h4>
                        <p>Croisière Capitales Baltiques</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-content">
                    <p>La qualité des excursions et l'expertise des guides locaux font toute la différence. Une immersion culturelle exceptionnelle.</p>
                </div>
                <div class="testimonial-author">
                    <img src="https://randomuser.me/api/portraits/men/52.jpg" alt="Thomas B.">
                    <div class="author-info">
                        <h4>Thomas B.</h4>
                        <p>Croisière Trésors Cachés</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-content">
                    <p>Le Nordic Star est un navire exceptionnel, alliant tradition nordique et confort moderne. Le personnel est attentionné et professionnel.</p>
                </div>
                <div class="testimonial-author">
                    <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Camille R.">
                    <div class="author-info">
                        <h4>Camille R.</h4>
                        <p>Croisière Splendeurs Baltiques</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

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