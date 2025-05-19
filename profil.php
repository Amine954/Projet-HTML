<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html>
  <head>
  		<meta charset = "utf-8">
  		<html lang = "fr">
      	<title>Profil | Viking Cruise</title>
      	<link rel="stylesheet" href="style.css" id="theme-style" >

        <script src="Javascript/darkmode.js" defer></script>

      
      
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  </head>
  <body>
    
    <?php include "includes/header.php" ?>


    
    <div id="main">
    <img src="https://images.unsplash.com/photo-1548574505-5e239809ee19?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2071&q=80" alt="Vue aérienne de la mer Baltique" />
      <div class="hero-text">
          <h2>Mon profil</h2>
          <p>Pour votre sécurité ne divulguez pas votre mot de passe</p>
      </div>
    </div>

    <main>
      <div>
        <div>
          <h3>Profil :</h3>
          </br>
        </div>
        <div class="InfoProfil">
          <?php
            echo "Nom: " . $_SESSION["nom"];
          ?>
          <button class="EditProfil" ></button>
          </br>
        </div>
        <div class="InfoProfil">
          <?php
            echo "Prenom: " . $_SESSION["prenom"];
          ?>
          <button class="EditProfil" ></button>
          </br>
        </div>
        <div class="InfoProfil">
          <?php
            echo "Email: " . $_SESSION["email"];
          ?>
          <button class="EditProfil" ></button>
          </br>
        </div>
        <div class="InfoProfil">
          <?php
            echo "Mot de passe: " . $_SESSION["mdp"];
          ?>
          <button class="EditProfil" ></button>
          </br>
        </div>
        <div class="InfoProfil">
          <?php
            echo "Tel: " . $_SESSION["tel"];
          ?>
          <button class="EditProfil" ></button>
          </br>
        </div>
        <div class="InfoProfil">
          Reservation :
          <button class="EditProfil" ></button>
          </br>
        </div>
        <div class="InfoProfil">
          VIP :
          </br>
        </div>
      </div>
    </main>
    
    <?php include "includes/footer.php" ?>

  </body>
</html>
