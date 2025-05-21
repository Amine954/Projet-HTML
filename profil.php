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
    <img src="https://cdn.futura-sciences.com/sources/images/mer-baltique-givre-rivage-.jpeg" alt="Vue aérienne de la mer Baltique" />
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
          <button class="EditProfil" ><i class="fa-solid fa-pencil"></i></button>
          </br>
        </div>
        <div class="InfoProfil">
          <?php
            echo "Prenom: " . $_SESSION["prenom"];
          ?>
          <button class="EditProfil" ><i class="fa-solid fa-pencil"></i></button>
          </br>
        </div>
        <div class="InfoProfil">
          <?php
            echo "Email: " . $_SESSION["email"];
          ?>

          </br>
        </div>
        <div class="InfoProfil">
          <?php
            echo "Mot de passe: " . $_SESSION["mdp"];
          ?>
          <button class="EditProfil"><i class="fa-solid fa-pencil"></i></button>
          </br>
        </div>
        <div class="InfoProfil">
          <?php
            echo "Tel: " . $_SESSION["tel"];
          ?>
          <button class ="EditProfil"><i class="fa-solid fa-pencil"></i></button>
          </br>
        </div>
        <div class="InfoProfil">
          Reservation :

          </br>
        </div>
        <div class="InfoProfil">
          <?php
            echo "VIP: ";
            if(isset($_SESSION["VIP"])){
              echo $_SESSION["VIP"];
            }
            else{
              echo "Non renseigné";
            }
          ?>
          </br>
        </div>
      <div class="InfoProfil">
          <?php
            echo "Reduction: ";
            if(isset($_SESSION["reduc"])){
              echo $_SESSION["reduc"];
            }
            else{
              echo "Non renseigné";
            }
          ?>
          </br>
        </div>
      <div class="InfoProfil">
          <?php
            echo "Banni: ";
            if(isset($_SESSION["ban"])){
              echo $_SESSION["ban"];
            }
            else{
              echo "Non renseigné";
            }
          ?>
          </br>
        </div>
      </div>
    </main>
    
    <?php include "includes/footer.php" ?>

  </body>
</html>
