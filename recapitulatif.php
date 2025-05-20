<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


function h($string) {
    return htmlspecialchars(trim($string), ENT_QUOTES, 'UTF-8');
}

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: recherche.php");
    exit();
}
$destination = h($_POST["destination"]);


$_SESSION[$destination . "_cart"] = $destination;
$_SESSION[$destination . "_wifi"] = $_POST["wifi"];
$_SESSION[$destination . "_animaux"] = $_POST["animaux"];
$_SESSION[$destination . "_date"] = $_POST["date"];
$_SESSION[$destination . "_destination"] = $_POST["destination"];
$_SESSION[$destination . "_duree"] = $_POST["duree"];
$_SESSION[$destination . "_cabines"] = $_POST["cabines"];
$_SESSION[$destination . "_parcours"] = $_POST["parcours"];
$_SESSION[$destination . "_personnes"] = $_POST["personnes"];
$_SESSION[$destination . "_message"] = $_POST["message"];






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

    <div class="recap">
        <div class="container-recap">
            <h1>Récapitulatif de votre réservation</h1>

            <?php
            $montant = 0;
            
            $duree = intval($_POST["duree"]);
            $cabine = h($_POST["cabines"]);
            $parcours = h($_POST["parcours"]);
            $nb_personnes = intval($_POST["personnes"]);

            if (($fichier_voy = fopen("donnees/voyages.csv", "r")) !== false) {
                while (($infos_voy = fgetcsv($fichier_voy, 1000, ";")) !== false) {
                    if (count($infos_voy) < 4) continue;
                    if (trim($infos_voy[0]) === $destination) {
                        $prix = ($duree == 14) ? intval($infos_voy[2]) : intval($infos_voy[3]);

                        switch ($cabine) {
                            case "Cabine avec Balcon":
                                $prix += 50 * $duree;
                                break;
                            case "Suite Deluxe":
                                $prix += 150 * $duree;
                                break;
                        }

                        switch ($parcours) {
                            case "Flex 1":
                                $prix += 100;
                                break;
                            case "Flex 2":
                                $prix += 300;
                                break;
                        }

                        if (isset($_POST["wifi"])) $prix += 10 * $duree;
                        if (isset($_POST["animaux"])) $prix += 8 * $duree;

                        $montant = $prix * $nb_personnes;
                        break;
                    }
                }
                fclose($fichier_voy);
            } else {
                echo "<p>Erreur lors de l'ouverture du fichier de données.</p>";
                exit;
            }

            // Affichage
            $_SESSION[$destination . "_prix"] = $montant;
            echo "<div class='info-recap'>Date de départ : " . h($_POST["date"]) . "</div>";
            echo "<div class='info-recap'>Croisière : " . $destination . "</div>";
            echo "<div class='info-recap'>Parcours : " . $parcours . "</div>";
            echo "<div class='info-recap'>Durée : " . $duree . " jours</div>";
            echo "<div class='info-recap'>Cabine : " . $cabine . "</div>";
            echo "<div class='info-recap'>Nombre de personnes : " . $nb_personnes . "</div>";
            echo "<div class='info-recap'>Demandes spéciales : " . h($_POST["message"]) . "</div>";
            echo "<div class='info-recap'><strong>Montant total : " . $montant . " €</strong></div>";
            ?>

            <a class="btn-retour" href="reservation.php">Modifier mes informations</a>

            <?php
            require "getapikey.php";
            $transaction = uniqid();
            $vendeur = "MI-2_E";
            $api_key = getAPIKey($vendeur);
            $http = $_SERVER['HTTP_HOST'];
            $path = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
            $retour = 'http://' . $http . $path . '/retour.php?a=0';
            $control = md5($api_key . "#" . $transaction . "#" . $montant . "#" . $vendeur . "#" . $retour . "#");
            ?>

            <form class="payment-form" action="https://www.plateforme-smc.fr/cybank/" method="POST">
                <input type="hidden" name="transaction" value="<?= $transaction ?>">
                <input type="hidden" name="montant" value="<?= $montant ?>">
                <input type="hidden" name="vendeur" value="<?= $vendeur ?>">
                <input type="hidden" name="retour" value="<?= htmlspecialchars($retour) ?>">
                <input type="hidden" name="control" value="<?= $control ?>">
                <input type="submit" value="Payer <?= $montant ?> €">
            </form>
        </div>



    </div>
    

    
    <?php include "includes/footer.php" ?>


</body>
</html>
