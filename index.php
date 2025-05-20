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
    <title>Viking Cruise | Croisières en Mer Baltique</title>
    <link rel="stylesheet" href="style.css" id="theme-style" >

    <script src="Javascript/darkmode.js" defer></script>

    
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body id="accueil">
    
    <?php include "includes/header.php" ?>

    <div id="main">
        <img src="https://bloomassociation.org/wp-content/uploads/2024/07/image-suede.jpg" alt="Croisière Viking" />
        <div class="hero-text">
            <h2>Explorez la Mer Baltique</h2>
            <p>Embarquez pour un voyage inoubliable à travers les joyaux historiques et paysages spectaculaires du Nord de l'Europe</p>
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
        <h2>Nos destinations populaires</h2>
        <div class="voyage-grid">
            <div class="voyage-item">
                <img src="https://www.nordic.be/wp-content/uploads/2021/05/Sognefjord-bezoek-de-Noorse-fjorden-met-Nordic-1.jpg" alt="fjorddrakkar">
                <div class="voyage-content">
                    <h3>🇩🇰 Fjorddrakkar</h3>
                    <p>La côte ouest de la Norvège mêle fjords majestueux, montagnes et villages paisibles, parfaite pour nature et aventure</p>
                    <div class="voyage-buttons">
                        <a href="voyage.php?nom=Fjorddrakkar" class="boutonmenu">Explorer</a>
                    </div>
                </div>
            </div>
            <div class="voyage-item">
                <img src="https://images.salaun-holidays.com//(Vignette)-vignette-Estonie-Tallinn-panorama-36-fo_77668323-09032017.jpg" alt="Yggdrasil">
                <div class="voyage-content">
                    <h3>🇫🇮 Yggdrasil</h3>
                    <p>Faites le tour des capitales des pays Baltes</p>
                    <div class="voyage-buttons">
                        <a href="voyage.php?nom=Yggdrasil" class="boutonmenu">Explorer</a>
                    </div>
                </div>
            </div>
            <div class="voyage-item">
                <img src="https://img.freepik.com/photos-premium/coucher-soleil-cramoisi-fond-du-golfe-botnie-finlande_564276-11717.jpg" alt="nordhavn">
                <div class="voyage-content">
                    <h3>🇸🇪 Nordhavn</h3>
                    <p>Explorez Stockholm et traversez le Golfe de Botnie, entre forêts, lacs et douceur nordique, parfait pour une immersion paisible</p>
                    <div class="voyage-buttons">
                        <a href="voyage.php?nom=Nordhavn" class="boutonmenu">Explorer</a>
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

    
    <?php include "includes/footer.php" ?>


</body>
</html>
