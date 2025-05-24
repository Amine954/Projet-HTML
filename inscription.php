<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription | Viking Cruise</title>
    <link rel="stylesheet" href="style.css" id="theme-style" >

    <script src="Javascript/darkmode.js" defer></script>
    <script src="Javascript/connexion.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
	
    <?php include "includes/header.php" ?>


    <div id="main">
        <img src="https://cdn.futura-sciences.com/sources/images/mer-baltique-givre-rivage-.jpeg" alt="Vue aérienne de la mer Baltique" />
        <div class="hero-text">
            <h2>Inscrivez-vous</h2>
            <p>Pour votre sécurité ne divulguez jamais votre mot de passe</p>
        </div>
    </div>
    <main>
        <div class="form-container-box">
            <div class="form-header">
                <h2>Rejoignez l'aventure Viking</h2>
                <p>Créez votre compte et embarquez pour des croisières inoubliables</p>
            </div>
            
            <div class="form-box">
                <form id="reservationformulaire" action="enregistrement_inscription.php" method="POST">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="nom"><i class="fas fa-user"></i> Nom</label>
                            <input type="text" id="nom" name="nom" placeholder="Votre nom" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="prenom"><i class="fas fa-user"></i> Prénom</label>
                            <input type="text" id="prenom" name="prenom" placeholder="Votre prénom" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="email"><i class="fas fa-envelope"></i> Email</label>
                            <input type="email" id="email" name="email" placeholder="votre.email@exemple.com" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="telephone"><i class="fas fa-phone"></i> Téléphone</label>
                            <input type="tel" id="telephone" name="telephone" placeholder="+33 6 12 34 56 78" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="mot_de_passe"><i class="fas fa-lock"></i> Mot de passe</label>
                            <input type="password" id="mot_de_passe" name="mot_de_passe" placeholder="Créez un mot de passe sécurisé" required>
                            <span onclick="togglePasswordVisibility('mot_de_passe')">👁️</span>
                        </div>
                        
                        <div class="form-group">
                            <label for="confirmation_mot_de_passe"><i class="fas fa-lock"></i> Confirmer le mot de passe</label>
                            <input type="password" id="confirmation_mot_de_passe" name="confirmation_mot_de_passe" placeholder="Confirmez votre mot de passe" required>
                            <span onclick="togglePasswordVisibility('confirmation_mot_de_passe')">👁️</span>
                        </div>
                    </div>
                    
                    <div class="consent-box">
                        <input type="checkbox" id="conditions" name="conditions" required>
                        <label for="conditions">En créant un compte, je confirme avoir lu et accepté les conditions d'utilisation et la politique de confidentialité de Viking Cruise.</label>
                    </div>
                    
                    <div class="form-submit">
                        <button type="submit" class="cta-button"><i class="fas fa-ship"></i> Créer mon compte</button>
                    </div>
                    
                    <div style="text-align: center; margin-top: 25px;">
                        <p>Déjà un compte ? <a href="connexion.php" style="color: var(--secondary); text-decoration: underline;">Connectez-vous ici</a></p>
                    </div>

                    <?php 
                        if(isset($_GET['error']) && $_GET['error']){
                            echo "<p style='color:red; text-align:center'>Email déjà pris</p>";
                        }
                    ?>
                </form>
            </div>
        </div>
    </main>
    
    <?php include "includes/footer.php" ?>

</body>
</html>