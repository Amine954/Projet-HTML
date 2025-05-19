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
    <title>Yggdrasil | Viking Cruise</title>
    <link rel="stylesheet" href="style.css" id="theme-style" >

    <script src="Javascript/darkmode.js" defer></script>

    
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body id="accueil">
    
    
    <?php include "includes/header.php" ?>


    <div id="main">
        <img src="https://www.holidayheroes.de/aistrive-assets/_next/image?url=https%3A%2F%2Fres.cloudinary.com%2Fdoy0yhd3a%2Fimage%2Fupload%2Fv1723019784%2Fpowerhouse%2Fdestinations%2Fnorway%2Foslo%2FOslo.jpg&w=3840&q=50" alt="Oslo" />
        <div class="hero-text">
            <h2>Oslo, la porte de l'Arctique</h2>
            <p>Découvrez Oslo, une ville où l’urbanisme moderne se fond parfaitement avec la nature sauvage des fjords, offrant ainsi une expérience unique alliant culture, aventure et innovation.</p>
        </div>
    </div>

    <section class="best-voyages">
        <h2>Yggdrasil</h2>
        <div class="voyage-grid">
            <div class="voyage-item">
                <img src="https://ulysse.com/news/wp-content/uploads/2024/04/Le-quartier-de-Christianshavn-Copenhague-au-Danemark.jpg" alt="Copenhague">
                <div class="voyage-content">
                    <h3>Copenhague</h3>
                    <p>Capitale du Danemark, séduit par son ambiance décontractée, ses canaux pittoresques, ses jardins et son mélange de design moderne et d’histoire royale.</p>
                </div>
            </div>
            <div class="voyage-item">
                <img src="https://littleweekends.fr/wp-content/uploads/2022/12/Bonnes-adresses-Stockholm-City-guide.jpg" alt="Stockholm">
                <div class="voyage-content">
                    <h3>Stockholm</h3>
                    <p>Stockholm, capitale de la Suède, est construite sur plusieurs îles, alliant histoire royale, musées modernes et paysages urbains impressionnants au bord de la mer.</p>
                </div>
            </div>
            <div class="voyage-item">
                <img src="https://images.saymedia-content.com/.image/ar_4:3%2Cc_fill%2Ccs_srgb%2Cq_auto:eco%2Cw_1200/MjAzNTgyNjkzNDkxODc3ODE5/10-things-to-do-in-helsinki-finland.png" alt="Helsinki">
                <div class="voyage-content">
                    <h3>Helsinki</h3>
                    <p>Helsinki, capitale de la Finlande, allie architecture moderne, culture scandinave et espaces verts, le tout au bord de la mer Baltique.</p>
                </div>
            </div>
            <div class="voyage-item">
                <img src="https://podrozowisko.pl/wp-content/uploads/Tallinn_luty-2020_dzie%C5%84-2-67.jpg" alt="Tallinn">
                <div class="voyage-content">
                    <h3>Tallinn</h3>
                    <p>Tallinn, capitale de l'Estonie, séduit par sa vieille ville médiévale bien préservée, ses rues pavées et son mélange d'histoire et de modernité.</p>
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
                <p>Un programme guidé afin de découvrir les incontournables des capitales suédoise et finoise.</p>
            </div>
            <div class="prepare-box">
                <h3><i class="fas fa-hotel"></i> Option Flex 2</h3>
                <p>Deux séjours de 24h avec hébergement 4 étoiles dans lequel vous pourrez profiter des merveilles de Copenhague et Tallinn, capitale de l'Estonie.</p>
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
        <h2>Découvrez Oslo à votre façon</h2>
        <div id="texte-presentation" style="text-align: center; max-width: 800px; margin: 0 auto 40px;">
            <p>
                Découvrez Oslo, la capitale norvégienne où la nature rencontre la modernité avec une harmonie parfaite. 
                Nichée entre les fjords et les collines verdoyantes, Oslo offre un cadre spectaculaire pour les amateurs de plein air et les passionnés de culture. 
                Parcourez ses quartiers animés, ses musées de renommée mondiale et ses espaces verts, tout en profitant de son ambiance chaleureuse et conviviale.
                Avec son architecture innovante, son engagement écologique et sa scène gastronomique florissante, Oslo est une destination incontournable pour les voyageurs en quête d'authenticité et de découvertes.
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
