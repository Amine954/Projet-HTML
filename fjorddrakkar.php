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
    <title>Fjorddrakkar | Viking Cruise</title>
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
        <h2>Fjorddrakkar</h2>
        <div class="voyage-grid">
            <div class="voyage-item">
                <img src="https://www.voyage-norvege.eu/wp-content/uploads/2018/11/Op%C3%A9ra-dOslo.jpg" alt="Oslo">
                <div class="voyage-content">
                    <h3>Oslo</h3>
                    <p>Capitale de la Norvège, Oslo mêle modernité, art, et nature avec ses musées, parcs et vues imprenables sur le fjord.</p>
                </div>
            </div>
            <div class="voyage-item">
                <img src="https://res.cloudinary.com/djew0njor/image/upload/v1665487752/Visit%20Region%20Stavanger/Places/Gamle%20Stavanger/gamle-stavanger-FotoKnoff-Sven-Erik-Knoff-1141_uigjgx.jpg" alt="Stavanger">
                <div class="voyage-content">
                    <h3>Stavanger</h3>
                    <p>Ville portuaire de Norvège, Stavanger est réputée pour son vieux quartier en bois, ses plages et son accès aux célèbres fjords et paysages naturels.</p>
                </div>
            </div>
            <div class="voyage-item">
                <img src="https://images.ctfassets.net/7mmwp5vb96tc/bYlcFkhq0IMCnebQSU2q6/3a266befbde003aa455ef23e16286bbf/bergen-norway-hgr-143160_1920-photo_shutterstock.jpg?q=40&w=3840&fm=webp" alt="Bergen">
                <div class="voyage-content">
                    <h3>Bergen</h3>
                    <p>Bergen, ville côtière de Norvège, est entourée de montagnes et fjords, offrant une vieille ville pittoresque, des maisons colorées et un climat typiquement pluvieux.</p>
                </div>
            </div>
            <div class="voyage-item">
                <img src="https://v.imgi.no/visitbodo-11854-b3ed0e5ba00309ca2e48224e17348e71-1176x784/Image-22-scaled.jpeg" alt="Bodo">
                <div class="voyage-content">
                    <h3>Bodo</h3>
                    <p>Ville du nord de la Norvège, entourée de nature sauvage, idéale pour observer les aurores boréales et explorer les paysages arctiques.</p>
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
                <p>Un programme guidé afin de découvrir les incontournables norvegien. Profitez d'une séance au grand Opéra d'Oslo et finissez votre voyage dans les montagnes de Bodo.</p>
            </div>
            <div class="prepare-box">
                <h3><i class="fas fa-hotel"></i> Option Flex 2</h3>
                <p>Séjour de 48h avec hébergement 4 étoiles dans lequel vous pourrez profiter des aurores boréales de Bergen. Une visite guidée du vieux Stavanger vous sera proposée. </p>
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
