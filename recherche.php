<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viking Cruise | Recherche de Croisières</title>
    <link rel="stylesheet" href="style.css" id="theme-style" >

    <script src="Javascript/darkmode.js" defer></script>

    
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    
    
    <?php include "includes/header.php" ?>


    <div id="main">
        <img src="https://www.wwf.fr/sites/default/files/styles/page_cover_large_16_9/public/2023-06/coucher-soleil-mer-baltique.jpg?h=561fe1eb&itok=WTKsVQty" alt="Vue aérienne de la mer Baltique" />
        <div class="hero-text">
            <h2>Découvrez nos croisières</h2>
            <p>Explorez notre collection de voyages exceptionnels à travers la mer Baltique</p>
        </div>
    </div>

    <div id="informations">
        <form action="recherche.php" method="get">

        <div class="info-formulaires">
            <label for="pays"><i class="fas fa-globe-europe"></i> Au départ de </label>
            <select name="pays" id="pays">
                <option value="">Choisir une ville</option> 

                <?php
                    $fichier_voy = fopen("donnees/voyages.csv", "r") or die("Impossible d'ouvrir le fichier !");

                        $liste_villes = array();

                        while(!feof($fichier_voy)){

                            $voy = fgets($fichier_voy);
                            //Si la ligne n'est pas vide (une ligne vide a un caractère " " et "\n" d'où >2)
                            if(strlen($voy) > 2){   

                                $infos_voy = str_getcsv($voy, ";", " ");
                                
                                $nom = $infos_voy[0];
                                
                                $prix = $infos_voy[1];
                                $presentation = $infos_voy[4];
                                $lien = $infos_voy[5];
                                $ville = $infos_voy[6];

                                if(!in_array($ville, $liste_villes)){
                                    $liste_villes[] = $ville;
                                    echo '<option value="'. $ville .'">'. $ville .'</option>';
                                }                               
                            }
                        }   

                fclose($fichier_voy);
            ?> 
            </select>  
                      
        </div>

        <div class="info-formulaires">
            <button class="cta-button">Rechercher</button>
        </div>
        </form>  
    </div>

    <section class="best-voyages">
        <h2>Nos voyages disponibles</h2>
        <div class="voyage-grid">
            <?php
            $fichier_voy = fopen("donnees/voyages.csv", "r") or die("Impossible d'ouvrir le fichier !");

                while(!feof($fichier_voy)){

                    $voy = fgets($fichier_voy);
                    //Si la ligne n'est pas vide (une ligne vide a un caractère " " et "\n" d'où >2)

                    if(strlen($voy) > 2){
                                
                        $infos_voy = str_getcsv($voy, ";", " ");
                        
                        $nom = $infos_voy[0];
                        $prix = $infos_voy[1];
                        $presentation = $infos_voy[4];
                        $lien = $infos_voy[5];

                        if((isset($_GET['pays']) && $_GET['pays'] == $infos_voy[6]) || !isset($_GET['pays']) || $_GET['pays'] == ""){
                            echo '<div class="voyage-item">';
                            echo   '<img src="'. $lien .'"alt="'. $nom .'">';
                            echo   '<div class="voyage-content">';
                            echo        '<h3>'. $nom .'</h3>';
                            echo        '<p>' . $presentation .' </p>';
                            echo        '<p class="voyage-price">À partir de : '. $prix .' € / nuit</p>';
                            echo            '<div class="voyage-buttons">';
                            echo                '<a href="voyage.php?nom='.$nom.'" class="boutonmenu">En savoir plus</a>';
                            echo                '<a href="reservation.php?destination='.$nom.'" class="boutonmenu">Réserver</a>';
                            echo            '</div>';
                            echo    '</div>';
                            echo '</div>';    
                        }
                    }
                }

            fclose($fichier_voy);
            ?> 
            
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

    
    <?php include "includes/footer.php" ?>


</body>
</html>
