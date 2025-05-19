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
    <title>Solstorm | Viking Cruise</title>
    <link rel="stylesheet" href="style.css" id="theme-style" >

    <script src="Javascript/darkmode.js" defer></script>

    
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body id="accueil">
    
    
    <?php include "includes/header.php" ?>


    <div id="main">
        <img src="https://photo.comptoir.fr/photos/voyage/350/danemark/copenhague/nyhavn-copenhague-danemark-487486-1280x640.jpg" alt="Copenhague" />
        <div class="hero-text">
            <h2>Copenhague, le joyau de la Scandinavie</h2>
            <p>Découvrez Copenhague, la ville des cyclistes, où modernité, écologie et charme nordique se rencontrent au bord de l’eau</p>
        </div>
    </div>

    <section class="best-voyages">
        <h2>Solstorm</h2>
        <div class="voyage-grid">
            <div class="voyage-item">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/57/Rostock_asv2018-05_img38_NeuerMarkt.jpg/960px-Rostock_asv2018-05_img38_NeuerMarkt.jpg" alt="Rostock">
                <div class="voyage-content">
                    <h3>Rostock</h3>
                    <p>Grande ville portuaire du nord de l’Allemagne, elle mêle héritage hanséatique, plages proches et ambiance étudiante dynamique.</p>
                </div>
            </div>
            <div class="voyage-item">
                <img src="https://s7g10.scene7.com/is/image/stena/20110623_kiel-hafen%3A16-9?ts=1643920815434&dpr=off" alt="Kiel">
                <div class="voyage-content">
                    <h3>Kiel</h3>
                    <p>Ville maritime du nord de l’Allemagne, connue pour son grand port, ses régates et son ambiance détendue au bord de la Baltique.</p>
                </div>
            </div>
            <div class="voyage-item">
                <img src="https://cdn.generationvoyage.fr/2021/01/guide-aarhus-1.jpg" alt="Aarhus">
                <div class="voyage-content">
                    <h3>Aarhus</h3>
                    <p>Ville jeune et culturelle du Danemark, elle allie modernité, musées innovants et charme côtier dans une atmosphère conviviale.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="container_preparation">
        <h2>Types de parcours proposés</h2>
        <div class="prepare-cruise-content">
            <div class="prepare-box">
                <h3><i class="fas fa-compass"></i> Pass Liberté</h3>
                <p>Soyez totalement autonomes pour explorer chacune des villes à votre rythme. Découvrez les trésors locaux, savourez la gastronomie et visitez les sites incontournables selon vos envies.</p>
            </div>
            <div class="prepare-box">
                <h3><i class="fas fa-map-marked-alt"></i> Option Flex 1</h3>
                <p>Un programme guidé afin de découvrir les incontournables du Nord de l'Allemagne.</p>
            </div>
            <div class="prepare-box">
                <h3><i class="fas fa-hotel"></i> Option Flex 2</h3>
                <p>Séjour de 24h avec hébergement 4 étoiles dans lequel vous pourrez profiter des merveilles de Kiel et goûter la soupe d'anguilles, specialité locale. </p>
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
        <h2>Découvrez Copenhague à votre façon</h2>
        <div id="texte-presentation" style="text-align: center; max-width: 800px; margin: 0 auto 40px;">
            <p>
                Découvrez Copenhague, une ville où l'élégance scandinave se mêle à une atmosphère décontractée et accueillante. Capitale du Danemark, elle séduit par son mélange parfait de modernité et de tradition. 
                Flânez dans ses rues pittoresques, à vélo ou à pied, et admirez son architecture contemporaine, ses jardins luxuriants et son célèbre port Nyhavn.
                Copenhague est également un véritable paradis gastronomique, avec des restaurants étoilés et une cuisine innovante.
                Entre culture, nature et innovation, chaque coin de la ville vous réserve une expérience inoubliable. 
            </p>
            <p style="margin-top: 20px; font-weight: 600; color: var(--accent);">
                <strong>Réservez dès maintenant votre croisière idéale et laissez-vous porter par l'aventure maritime ! 🚢✨</strong>
            </p>
        </div>

        <ul style="text-align: center; list-style-type: none;  width: 15%; margin: 0 auto;" class='boutonmenu' >
            <?php
                if (isset($_SESSION["statut"]) && ($_SESSION["statut"] === "connecte_admin" || $_SESSION["statut"] === "connecte_client")) {
                    echo "<li><a href='reservation.php'>Reserver ma croisière</a></li>";
                } 
                else {
                    echo "<li><a href='connexion.php'>Reserver ma croisière</a></li>"; 
                }
            ?>
        </ul>
    </section>

    
    <?php include "includes/footer.php" ?>


</body>
</html>
