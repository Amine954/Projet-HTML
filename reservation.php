<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}





$json = file_get_contents('Json/donnes_voyages.json');
$voyages = json_decode($json, true);


foreach ($voyages as $voyage) {
    if ($voyage['nomcroisiere'] === $_GET['destination']) {
        $destination = $_GET['destination'];
        $selection = $voyage;
        break;
    }
}

if (!isset($destination)){
    header('Location: recherche.php');
    exit();
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Présentation | Viking Cruise</title>
    <link rel="stylesheet" href="style.css" id="theme-style" >

    <script src="Javascript/darkmode.js" defer></script>
    <script src="Javascript/verifFormulaire.js"></script>

    
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
	
    <?php include "includes/header.php" ?>



    <div id="main">
        <img src="<?php echo $selection['image'][0]; ?>" alt="Image" />
        <div class="hero-text">
            <h2>Réservez votre voyage à <?php echo $destination; ?> <br> avec Viking Cruise</h2>
            <p>Votre partenaire pour explorer les trésors cachés de la Mer Baltique</p>
        </div>
    </div>

    <section class="best-voyages">
        <h2>Prêts pour l'aventure ?</h2>
        <div class="voyage-grid">
            <div class="voyage-item" style="flex: 0 1 100%; max-width: 100%;">
                <img src="<?php echo $selection['image'][rand(1, count($selection['image'])-1)]; ?>" alt="Une photo" style="height: 500px;">
                <div class="voyage-content">
                    <p><?php echo $selection['villedescriptif']; ?></p>
                    <p>Nos itinéraires soigneusement élaborés vous permettent de découvrir les plus beaux joyaux de la région baltique, des capitales scandinaves aux villes médiévales baltes.</p>
                </div>
            </div>
        </div>
    </section>

	<section class="form-container-box">
    <div class="form-header">
        <h2>Réservez votre aventure à <?php echo $destination; ?></h2>
        <p>Embarquez pour un voyage d'exception et découvrez les trésors du Nord</p>
    </div>

    <div class="info-formulaires">
        <form id="reservationFormulaire" action="recapitulatif.php" method="POST" onsubmit="return checkFormulaire();">
            <div class="form-row">
                <div class="form-group">
                    <label for="date"><i class="far fa-calendar-alt"></i> Date de départ</label>
                    <?php if (isset($_SESSION[$destination . "_date"])) : ?>
                        <input type="date" id="date" name="date" min="<?php echo date('Y-m-d'); ?>" max="<?php echo date('Y-m-d', strtotime('+5 year')); ?>" value="<?php echo $_SESSION[$destination . "_date"]; ?>" required>
                    <?php else : ?>
                        <input type="date" id="date" name="date" min="<?php echo date('Y-m-d'); ?>" max="<?php echo date('Y-m-d', strtotime('+5 year')); ?>" required>
                    <?php endif; ?>
                    <p id="errorDate" class="error-message"></p>
                </div>

                
                <div class="form-group">
                    <label for="duree"><i class="fas fa-clock"></i> Durée de la croisière</label>
                    <select name="duree" id="duree" required>
                        <option value="14" <?php if (isset($_SESSION[$destination . "_duree"]) && $_SESSION[$destination . "_duree"] == "14") echo "selected"; ?>>14 jours</option>
                        <option value="21" <?php if (isset($_SESSION[$destination . "_duree"]) && $_SESSION[$destination . "_duree"] == "21") echo "selected"; ?>>21 jours</option>
                    </select>
                </div>
            
                <div class="form-group">
                    <label for="cabines"><i class="fas fa-bed"></i> Type de cabine</label>
                    <select name="cabines" id="cabines" required>
                        <option value="Cabine Standard" <?php if (isset($_SESSION[$destination . "_cabines"]) && $_SESSION[$destination . "_cabines"] == "Cabine Standard") echo "selected"; ?>>Cabine Standard (+0/nuit) </option>
                        <option value="Cabine avec Balcon" <?php if (isset($_SESSION[$destination . "_cabines"]) && $_SESSION[$destination . "_cabines"] == "Cabine avec Balcon") echo "selected"; ?>>Cabine avec Balcon (+50/nuit) </option>
                        <option value="Suite Deluxe" <?php if (isset($_SESSION[$destination . "_cabines"]) && $_SESSION[$destination . "_cabines"] == "Suite Deluxe") echo "selected"; ?>>Suite Deluxe (+150/nuit)</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="parcours"><i class="fa-solid fa-compass"></i> Type de parcours</label>
                    <select name="parcours" id="parcours" required>
                        <option value="Pass Liberté" <?php if (isset($_SESSION[$destination . "_parcours"]) && $_SESSION[$destination . "_parcours"] == "Pass Liberté") echo "selected"; ?>>Pass Liberté</option>
                        <option value="Flex 1" <?php if (isset($_SESSION[$destination . "_parcours"]) && $_SESSION[$destination . "_parcours"] == "Flex 1") echo "selected"; ?>>Flex 1 - 100€</option>
                        <option value="Flex 2" <?php if (isset($_SESSION[$destination . "_parcours"]) && $_SESSION[$destination . "_parcours"] == "Flex 2") echo "selected"; ?>>Flex 2 - 300€</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="personnes"><i class="fas fa-users"></i> Nombre de voyageurs</label>
                    <?php if (isset($_SESSION[$destination . "_personnes"])) : ?>
                        <input type="number" id="personnes" name="personnes" min="1" max="10" placeholder="Nombre de personnes" value=<?php echo $_SESSION[$destination . "_personnes"]; ?> required>
                    <?php else : ?>
                        <input type="number" id="personnes" name="personnes" min="1" max="10" placeholder="Nombre de personnes" required>
                    <?php endif; ?>
                    <p id="errorPersonnes" class="error-message"></p>
                </div>
            
                <div class="consent-box">
                    <?php if (isset($_SESSION[$destination . "_wifi"])) : ?>
                        <input type="checkbox" id="consent-wifi" name="wifi" checked>
                    <?php else : ?>
                        <input type="checkbox" id="consent-wifi" name="wifi">
                    <?php endif; ?>
                    <label for="consent-wifi">Wifi - 10€/J</label>
                    
                </div>

                <div class="consent-box">
                    <?php if (isset($_SESSION[$destination . "_animaux"])) : ?>
                        <input type="checkbox" id="consent-animaux" name="animaux" checked>
                    <?php else : ?>
                        <input type="checkbox" id="consent-animaux" name="animaux" >  
                    <?php endif; ?>
                    <label for="consent-animaux">Animaux - 8€/J</label>
                                      
                </div>
                
                <div class="form-group full-width">
                    
                    <label for="message"><i class="fas fa-comment"></i> Demandes spéciales (optionnel)</label>
                    <?php if (isset($_SESSION[$destination . "_message"])) : ?>
                        <textarea id="message" name="message" placeholder="Régimes alimentaires spéciaux, besoins d'accessibilité, ou autres demandes"><?php echo $_SESSION[$destination . "_message"]; ?></textarea>
                    <?php else : ?>
                        <textarea id="message" name="message" placeholder="Régimes alimentaires spéciaux, besoins d'accessibilité, ou autres demandes"></textarea>
                    <?php endif; ?>
                </div> 

                <div class="consent-box">
                    <input type="checkbox" id="consent" name="consent" required>
                    <label for="consent"> <i> J'accepte les conditions générales et la politique de confidentialité </i></label>
                </div>

                <div class="form-submit">
                    <input type="hidden" id="destination" name="destination" value="<?php echo $destination; ?>">
                    <button type="submit" class="cta-button"><i class="fas fa-ship"></i> Embarquer pour l'aventure</button>
                </div>

            </div>
        </form>
        </br>
    </div>
</section>

    
    <?php include "includes/footer.php" ?>

</body>
</html>