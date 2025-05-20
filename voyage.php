<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$json = file_get_contents('Json/donnes_voyages.json');
$voyages = json_decode($json, true);
$verif = 0;

foreach($voyages as $v){
    if((isset($_GET['nom'])) && (strtolower($v['nomcroisiere']) == strtolower($_GET['nom']))){
        $verif = 1;
        break;
    }
}

if($verif == 0){
    header("Location: index.php");
}

$images = $v['image'];
$etapes = $v['etapes'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ($v['nomcroisiere']) ?> | Viking Cruise</title>
    <link rel="stylesheet" href="style.css" id="theme-style" >

    <script src="Javascript/darkmode.js" defer></script>

    
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body id="accueil">
    
    
    <?php include "includes/header.php" ?>


    <div id="main">
        <?php
            echo '<img src="'.$images[0].'">';
            echo '<div class="hero-text">';
            echo '<h2>'.$v['villedepart'].'</h2>';
            echo '<p>'.$v['villedescriptif'].'</p>';
            echo '</div>';
        ?>
    </div>

    <section class="best-voyages">
        <h2><?php echo($v['nomcroisiere']) ?></h2>
        <div class="voyage-grid">
            <?php
                $i = 1;
                foreach($etapes as $e){
                    echo '<div class="voyage-item">';
                    echo '<img src="'.$images[$i].'">';
                    echo '<div class="voyage-content">';
                    echo '<h3>'.$e['nom'].'</h3>';
                    echo '<p>'.$e['descriptif'].'</p>';
                    echo '</div>';
                    echo '</div>';
                    $i++;
                }
            ?>
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
        <?php echo '<h2>'.$v['villedecouvrir'].'</h2>' ?>
        <div id="texte-presentation" style="text-align: center; max-width: 800px; margin: 0 auto 40px;">
            <?php echo '<p>'.$v['villedescriptifcomplet'].'</p>' ?>
            <p style="margin-top: 20px; font-weight: 600; color: var(--accent);">
                <strong>Réservez dès maintenant votre croisière idéale et laissez-vous porter par l'aventure maritime ! 🚢✨</strong>
            </p>
        </div>

        <ul style="text-align: center; list-style-type: none;  width: 15%; margin: 0 auto;" class='boutonmenu' >
            <?php
                if (isset($_SESSION["statut"]) && ($_SESSION["statut"] === "connecte_admin" || $_SESSION["statut"] === "connecte_client")) {
                    echo "<li><a href='reservation.php?destination=".$_GET['nom']."'>Reserver ma croisière</a></li>";
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
