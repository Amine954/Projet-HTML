<?php
	session_start();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page d'accueil | Viking Cruise</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="accueil">
	
    
    <header>
        <h1> Viking Cruise </h1>
    </header>

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

    <div id="main">
        <img src="https://lecercledeseconomistes.fr/wp-content/uploads/2024/09/Banniere-Site-Cercle-3-2.png" alt="Bannière Viking Cruise" width="100%" height="100%"/>
    </div>

    <div id="informations">
        <div class="info-formulaires">
            <label for="pays">Pays :</label>
            <select name="pays" id="pays">
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
            <label for="date_de_depart">Date de départ :</label>
            <input type="date" name="date_de_depart" id="date_de_depart" placeholder="Ex : 01/01/2000" />
        </div>
        
        <div class="info-formulaires">
            <label for="personnes">Nombre de personnes (1-30) :</label>
            <input type="number" id="personnes" name="personnes" min="1" max="30" />
        </div>
        
        <div class="info-formulaires">
            <button class="cta-button">Voyager !</button>
        </div>
    </div>

    <section class="best-voyages">
        <h2>Nos Meilleurs Voyages</h2>
        <div class="voyage-grid">
            <div class="voyage-item">
                <img src="https://www.larousse.fr/encyclopedie/data/images/1313923-Stockholm.jpg" alt="Stockholm">
                <h3>Stockholm, Suède</h3>
                <p>Découvrez Stockholm et ses magnifiques archipels.</p>
                <a href="stockholm.html" class="boutonmenu">En savoir plus</a>
            </div>
            <div class="voyage-item">
                <img src="https://www.atterrir.com/wp-content/uploads/2024/02/Copenhague-au-Danemark-.jpg" alt="Copenhague">
                <h3>Copenhague, Danemark</h3>
                <p>Profitez d'une croisière unique entre tradition et modernité.</p>
                <a href="copenhague.html" class="boutonmenu">En savoir plus</a>
            </div>
            <div class="voyage-item">
                <img src="https://lapetiterade.com/wp-content/uploads/2024/06/Tallinn-en-estonie.jpg" alt="Tallinn">
                <h3>Tallinn, Estonie</h3>
                <p>Un voyage dans la vieille ville médiévale de Tallinn.</p>
                <a href="tallinn.html" class="boutonmenu">En savoir plus</a>
            </div>
        </div>
    </section>

	<section class="container_preparation">
        <h2>Bien préparer votre croisière</h2>
        <div class="prepare-cruise-content">
            <div class="prepare-box">
                <h3>📦 Bagages et équipements</h3>
                <p>Pensez à emporter des tenues adaptées aux différentes escales et activités à bord.</p>
            </div>
            <div class="prepare-box">
                <h3>📄 Documents de voyage</h3>
                <p>Assurez-vous d’avoir votre passeport, carte d’identité, billets de croisière et visas si nécessaire.</p>
            </div>
            <div class="prepare-box">
                <h3>⚓ Excursions et activités</h3>
                <p>Réservez vos excursions à l’avance pour ne rien manquer des meilleures attractions.</p>
            </div>
            <div class="prepare-box">
                <h3>🛳️ Vie à bord</h3>
                <p>Découvrez les restaurants, bars, spectacles et services pour profiter pleinement de votre séjour.</p>
            </div>
            <div class="prepare-box">
                <h3>📅 Formalités et embarquement</h3>
                <p>Vérifiez l’heure d’embarquement, les procédures de sécurité et préparez vos documents à l’avance.</p>
            </div>
        </div>
    </section>
    <footer>
        <p>&copy; 2025 - Viking Cruise | Voyagez en toute sérénité</p>
    </footer>
</body>
</html>
