<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion | Viking Cruise</title>
        <link rel="stylesheet" href="style.css" id="theme-style" >

    <script src="Javascript/darkmode.js" defer></script>
    <script src="connexion.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
	
    <?php include "includes/header.php" ?>


    <div id="main">
        <img src="https://images.unsplash.com/photo-1548574505-5e239809ee19?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2071&q=80" alt="Vue aérienne de la mer Baltique" />
        <div class="hero-text">
            <h2>Connectez-vous</h2>
            <p>Pour votre sécurité ne divulguez jamais votre mot de passe</p>
        </div>
    </div>

    <main>
        <div class="form-container-box">
            <div class="form-header">
                <h2>Connexion</h2>
                <p>Connectez-vous pour accéder à votre compte et gérer vos réservations</p>
            </div>
            
            <div class="form-box">
                <?php
                    if(isset($_GET['back']) && $_GET['back']=='reservation'){
                        echo '<form id="reservationformulaire" action="Verification_connexion.php?back=reservation" method="POST">';
                    }
                    else{
                        echo '<form id="reservationformulaire" action="Verification_connexion.php" method="POST">';
                    }
                ?>
                
                    <div class="form-row">
                        <div class="form-group full-width">
                            <label for="email"><i class="fas fa-envelope"></i> Adresse email</label>
                            <input type="email" id="email" name="email" placeholder="Votre adresse email" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group full-width">
                            <label for="mot_de_passe"><i class="fas fa-lock"></i>  Mot de passe </label>
                            <input type="password" id="mot_de_passe" name="mot_de_passe" placeholder="Votre mot de passe" required >
                            <span onclick="togglePasswordVisibility('mot_de_passe')">👁️</span>
                        </div>
                    </div>
                    
                    <div class="consent-box">
                        <input type="checkbox" id="remember_me" name="remember_me">
                        <label for="remember_me">Se souvenir de moi sur cet appareil</label>
                    </div>
                    
                    <div class="form-submit">
                        <button type="submit" class="cta-button"><i class="fas fa-sign-in-alt"></i> Se connecter</button>
                    </div>
                    
                    <div style="text-align: center; margin-top: 25px;">
                        <p>Pas encore de compte ? <a href="inscription.php" style="color: var(--secondary); font-weight: 600;">Inscrivez-vous ici</a></p>
                        <p style="margin-top: 10px;"><a href="mot-de-passe-oublie.php" style="color: var(--accent);">Mot de passe oublié ?</a></p>
                    </div>


                    <?php 
                        if(isset($_GET['error'])){
                        
                            switch($_GET['error']){
                                case "email_mdp": 
                                    echo "<p style='color:red; text-align:center'>Email inexistant et mot de passe non valide</p>";
                                    break;
                                    
                                case "mdp": 
                                    echo "<p style='color:red; text-align:center'>Mot de passe non valide</p>";
                                    break;
                                    
                                case "email": 
                                    echo "<p style='color:red; text-align:center'>Email inexistant</p>";
                                    break;
                                default:
                                    break;
                            }
                        }
	 		        ?>

                </form>
            </div>
        </div>
    </main>

    
    <?php include "includes/footer.php" ?>

</body>
</html>
