<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Croisières en Mer Baltique</title> 
</head>
<body>
  
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

  <div class="SearchBar">
		<form action="recherche.php" method="get">
			<label for="Recherche">🔍︎</label>
			<input type="text" name="query" placeholder="Rechercher"/> 
		</form>
	</div>

    <main id="Reservation">
        <h2>Nos voyages disponibles</h2>

        <ul class="voyage-list">

            <li class="voyage-item">
                <div class="voyage-info">
                    <strong>🇩🇰 Solstorm</strong> 
                    <p class="voyage-price">À partir de : 150€ / nuit</p>
                    
                </div>
        
                <p class="voyage-description">Partez en croisière depuis Copenhague et explorez Rostock, Kiel et Aarhus, entre patrimoine historique, paysages marins et culture scandinave. </p>
                <button class="boutonmenu"><a href=solstorm.php>Réserver</a></button> 

                <div class="voyage-images">
                    <img src="https://static.abcroisiere.com/images/fr/itineraires/croisiere_zoom,baltique---pologne--lituanie--lettonie--suede-,2463114,534427.gif" alt="Trajet de la croisière - Stockholm">
                    <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/356221635.jpg?k=dcb208d14917ed05d092f179e426a8880e0cc127c04da5c51e43ee423bba7efc&o=&hp=1" alt="Bateau la croisière">
                </div>
            </li>

            <li class="voyage-item">
                <div class="voyage-info">
                    <strong>🇩🇰 Fjorddrakkar </strong> 
                    <p class="voyage-price">À partir de : 130€ / nuit</p>
                    	
                </div>

                <p class="voyage-description">Partez en croisière depuis Copenhague à la découverte des villes scandinaves d'Oslo, Stavanger, Bergen et Bodø, entre fjords majestueux et paysages époustouflants.</p>
                <button class="boutonmenu"><a href=fjorddrakkar.php>Réserver</a></button> 

                <div class="voyage-images">
                    <img src="https://static.abcroisiere.com/images/fr/itineraires/croisiere_zoom%2Cbaltique---oslo--berlin--st-petersbourg--tallinn--helsinki--stockholm-%2C1090097%2C71841.gif" alt="Trajet de la croisière - Copenhague">
                    <img src="https://www.vikingline.com/globalassets/images/ships_and_onboard/cinderella/exterior/viking-cinderella-20636-812x501.jpg?maxwidth=812" alt="Bateau la croisière">
                </div>
            </li>

            <li class="voyage-item">
                <div class="voyage-info">
                    <strong>🇸🇪 Valkyra</strong> 
                    <p class="voyage-price">À partir de : 140€ / nuit</p>
                    
                </div>

                <p class="voyage-description">Embarquez depuis Stockholm pour une croisière à la découverte de Mariehamn, Kuressaare, Riga et Klintehamn, entre îles pittoresques, châteaux médiévaux et culture balte.</p>
                <button class="boutonmenu"><a href=valkyra.php>Réserver</a></button> 

                <div class="voyage-images">
                    <img src="https://static.abcroisiere.com/images/fr/itineraires/720x450%2Ccapitales-de-la-baltique-%2C2041798%2C525820.jpg" alt="Trajet de la croisière - Helsinki">
                    <img src="https://www.ferrycenter.ch/wp-content/uploads/2019/04/F%C3%A4hrschiff-Viking-XPRS-auf-offener-See_Viking-Line-800x400.jpg" alt="Bateau de croisière">
                </div>
            </li>

            <li class="voyage-item">
              <div class="voyage-info">
                  <strong>🇸🇪 Nordhavn</strong> 
                  <p class="voyage-price">À partir de : 170€ / nuit</p>
                  
              </div>

              <p class="voyage-description">Partez en croisière depuis Stockholm et découvrez Turku, Vaasa et Oulu, trois villes finlandaises alliant charme historique, paysages naturels et atmosphère nordique unique.</p>
              <button class="boutonmenu"><a href=nordhavn.php>Réserver</a></button> 

              <div class="voyage-images">
                  <img src="https://www.worldatlas.com/r/w768/upload/7c/f5/3d/gotland-01.png" alt="Gotland">
                  <img src="https://www.cruisemapper.com/images/ships/2048-72354d699f5.jpg" alt="Bateau de croisière">
              </div>
            </li>

            <li class="voyage-item">
              <div class="voyage-info">
                  <strong>🇳🇴 Yggdrasil</strong> 
                  <p class="voyage-price">À partir de : 170€ / nuit</p>
                  
              </div>

              <p class="voyage-description">Embarquez pour une croisière au départ d'Oslo, à la découverte de Copenhague, Stockholm, Helsinki et Tallinn, entre histoire, culture et paysages scandinaves et baltiques.</p>
              <button class="boutonmenu"><a href=yggdrasil.php>Réserver</a></button> 

              <div class="voyage-images">
                  <img src="https://upload.wikimedia.org/wikipedia/commons/c/c0/%C3%85land_map_2.png" alt="Fasta Åland">
                  <img src="https://www.tallink.com/_next/image?url=https%3A%2F%2Fcms-web-api.tallink.com%2Fapi%2Fcloudinary%2Fas-tallink-grupp%2Fimage%2Fupload%2Ff_auto%2Cfl_lossy%2Cq_auto%3Abest%2Ch_1378%2Cw_2448%2Fd_it%3Aplaceholder%3Aplaceholder.jpg%2Ftravel%2Ffleet%2Fbaltic-queen%2Fbaltic-queen-3.jpg&w=2448&q=75" alt="Bateau de croisière">
              </div>
            </li>

        </ul>
    </main>

    <footer>
        <p>&copy; 2025 - Viking Cruise</p>
    </footer>

</body>
</html>
