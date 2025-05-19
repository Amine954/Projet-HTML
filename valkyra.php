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
    <title>Valkyra | Viking Cruise</title>
    <link rel="stylesheet" href="style.css" id="theme-style" >

    <script src="Javascript/darkmode.js" defer></script>

    
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body id="accueil">
    
    
    <?php include "includes/header.php" ?>


    <div id="main">
        <img src="https://ulysse.com/news/wp-content/uploads/2024/05/La-ville-de-Stockholm-en-Suede-.jpg" alt="Stockholm" />
        <div class="hero-text">
            <h2>Stockholm, la Venise du Nord</h2>
            <p>Découvrez la capitale suédoise construite sur 14 îles, où histoire et modernité s'entrelacent harmonieusement</p>
        </div>
    </div>

    <section class="best-voyages">
        <h2>Valkyra</h2>
        <div class="voyage-grid">
            <div class="voyage-item">
                <img src="https://assets.ferryscanner.com/media/2022/10/Ferryscanner-hotels-in-Mariehamn.jpg" alt="Mariehamn">
                <div class="voyage-content">
                    <h3>Mariehamn</h3>
                    <p>Capitale des îles Åland, cette petite ville charmante offre une atmosphère insulaire unique, entre maisons colorées, ports tranquilles et culture suédo-finlandaise.</p>
                </div>
            </div>
            <div class="voyage-item">
                <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/13/c1/dc/8b/kuressaare-castle-by.jpg?w=1400&h=1400&s=1" alt="Kuressaare">
                <div class="voyage-content">
                    <h3>Kuressaare</h3>
                    <p>Charmante ville d’île avec un château médiéval bien conservé, un port tranquille et une ambiance relax idéale pour se ressourcer.</p>
                </div>
            </div>
            <div class="voyage-item">
                <img src="https://www.voyageursdumonde.fr/voyage-sur-mesure/img/mag/201602/le-vieux-riga.jpg" alt="Riga">
                <div class="voyage-content">
                    <h3>Riga</h3>
                    <p>Capitale de la Lettonie, cette ville mêle architecture art nouveau, vieille ville médiévale et vie culturelle animée au bord de la Baltique.</p>
                </div>
            </div>
            <div class="voyage-item">
                <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/11/72/bc/32/warfsholm-fran-ovan-ar.jpg?w=1200&h=1200&s=1" alt="Klintehamn">
                <div class="voyage-content">
                    <h3>Klintehamn</h3>
                    <p>Petit port de l’île de Gotland, ce village paisible séduit par sa nature côtière, ses plages calmes et son ambiance typiquement suédoise.</p>
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
                <p>Un programme guidé afin de découvrir les incontournables de Klintehamn et Mariehamn en faisant le détour par Riga.</p>
            </div>
            <div class="prepare-box">
                <h3><i class="fas fa-hotel"></i> Option Flex 2</h3>
                <p>Séjour de 48h avec hébergement 4 étoiles dans lequel vous pourrez profiter des merveilles de Kuressaare, et surtout de son château emblématique. </p>
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
        <h2>Découvrez Stockholm à votre façon</h2>
        <div id="texte-presentation" style="text-align: center; max-width: 800px; margin: 0 auto 40px;">
            <p>
                Découvrez Stockholm, la capitale suédoise construite sur 14 îles, où histoire et modernité s'entrelacent harmonieusement.
                Flânez dans le Gamla Stan, la vieille ville médiévale aux ruelles pavées et aux façades colorées, visitez le majestueux Palais Royal, et plongez dans l'histoire maritime au Musée Vasa.
                Amateurs de nature, explorez l'archipel de Stockholm et ses 30 000 îles lors d'une excursion en bateau.
                Côté gastronomie, savourez un smörgåsbord ou un kanelbulle lors d'une pause fika typiquement suédoise.
                Stockholm vous promet une escapade inoubliable.
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
