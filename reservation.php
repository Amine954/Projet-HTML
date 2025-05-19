
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
    <title>Présentation | Viking Cruise</title>
    <link rel="stylesheet" href="style.css" id="theme-style" >

    <script src="Javascript/darkmode.js" defer></script>

    
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
	
    <?php include "includes/header.php" ?>



    <div id="main">
        <img src="https://images.unsplash.com/photo-1528155124528-06c125d81e89?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" alt="Mer Baltique" />
        <div class="hero-text">
            <h2>Découvrez Viking Cruise</h2>
            <p>Votre partenaire pour explorer les trésors cachés de la Mer Baltique</p>
        </div>
    </div>

    <section class="best-voyages">
        <h2>Prêts pour l'aventure ?</h2>
        <div class="voyage-grid">
            <div class="voyage-item" style="flex: 0 1 100%; max-width: 100%;">
                <img src="https://mediaim.expedia.com/destination/1/56a9d89a57059551e120c78efad8bb3e.jpg" alt="Une photo de la Mer Baltique" style="height: 500px;">
                <div class="voyage-content">
                    <p>Découvrez de nombreux lieux touristiques comme Oslo, Stockholm, Riga, Copenhague, Tallinn ou encore Helsinki à bord de nos navires de croisière.</p>
                    <p>Nos itinéraires soigneusement élaborés vous permettent de découvrir les plus beaux joyaux de la région baltique, des capitales scandinaves aux villes médiévales baltes.</p>
                </div>
            </div>
        </div>
    </section>

	<section class="form-container-box">
    <div class="form-header">
        <h2>Réservez votre aventure en mer Baltique</h2>
        <p>Embarquez pour un voyage d'exception et découvrez les trésors du Nord</p>
    </div>

    <div class="info-formulaires">
        <form id="reservationFormulaire" action="recapitulatif.php" method="POST">
            <div class="form-row">

                <div class="form-group">
                    <label for="nom"><i class="fas fa-user"></i> Nom</label>
                    <input type="text" id="nom" name="noms" placeholder="Votre nom complet" required maxlength="20">
                </div>

                <div class="form-group">
                    <label for="prenoms"><i class="fas fa-user"></i> Prénom</label>
                    <input type="text" id="prenoms" name="prenoms" placeholder="Votre prénom complet" required maxlength="20">
                </div>
                
                <div class="form-group">
                    <label for="email"><i class="fas fa-envelope"></i> Email</label>
                    <input type="email" id="email" name="mail" placeholder="Votre adresse email" required maxlength="30">
                </div>
                     
                <div class="form-group">
                    <label for="telephone"><i class="fas fa-phone"></i> Téléphone</label>
                    <input type="tel" id="telephone" name="telephone" placeholder="Votre numéro de téléphone" required maxlength="10">
                </div>
                
                <div class="form-group">
                    <label for="date"><i class="far fa-calendar-alt"></i> Date de départ</label>
                    <input type="date" id="date" name="date" required>
                </div>
            
                <div class="form-group">
                    <label for="destination"><i class="fas fa-globe-europe"></i> Destination</label>
                    <select name="destination" id="destination" required>
                        <option value="vide" disabled selected>Choisir une destination</option>
                        <option value="Fjorddrakkar">Fjorddrakkar</option>
                        <option value="Yggdrasil">Yggdrasil</option>
                        <option value="Nordhavn">Nordhavn</option>
                        <option value="Solstorm">Solstorm</option>
                        <option value="Valkyra">Valkyra</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="duree"><i class="fas fa-clock"></i> Durée de la croisière</label>
                    <select name="duree" id="duree" required>
                        <option value="vide" disabled selected>Choisir une durée</option>
                        <option value="14">14 jours</option>
                        <option value="21">21 jours</option>
                    </select>
                </div>
            
                <div class="form-group">
                    <label for="cabines"><i class="fas fa-bed"></i> Type de cabine</label>
                    <select name="cabines" id="cabines" required>
                        <option value="vide" disabled selected>Choisir une cabine</option>
                        <option value="Cabine Standard">Cabine Standard (+0/nuit) </option>
                        <option value="Cabine avec Balcon">Cabine avec Balcon (+50/nuit) </option>
                        <option value="Suite Deluxe">Suite Deluxe (+150/nuit)</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="parcours"><i class="fa-solid fa-compass"></i> Type de parcours</label>
                    <select name="parcours" id="parcours" required>
                        <option value="vide" disabled selected>Choisir un parcours</option>
                        <option value="Pass Liberté">Pass Liberté</option>
                        <option value="Flex 1">Flex 1 - 100€</option>
                        <option value="Flex 2">Flex 2 - 300€</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="personnes"><i class="fas fa-users"></i> Nombre de voyageurs</label>
                    <input type="number" id="personnes" name="personnes" min="1" max="10" placeholder="Nombre de personnes" required>
                </div>
            
                <div class="consent-box">
                    <input type="checkbox" id="consent-wifi" name="wifi" >  
                    <label for="consent-wifi">Wifi - 10€/J</label>
                    
                </div>

                <div class="consent-box">
                    <input type="checkbox" id="consent-animaux" name="animaux" >  
                    <label for="consent-animaux">Animaux - 8€/J</label>
                                      
                </div>
                
                <div class="form-group full-width">
                    <label for="message"><i class="fas fa-comment"></i> Demandes spéciales (optionnel)</label>
                    <textarea id="message" name="message" placeholder="Régimes alimentaires spéciaux, besoins d'accessibilité, ou autres demandes"></textarea>
                </div> 

                <div class="consent-box">
                    <input type="checkbox" id="consent" name="consent" required>
                    <label for="consent"> <i> J'accepte les conditions générales et la politique de confidentialité </i></label>
                </div>

                <div class="form-submit">
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
