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
        <script src="Javascript/profil.js" defer></script>
      
      
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
            echo "Nom: <span>" . $_SESSION["nom"] . "</span>";
          ?>
          <button class="EditProfil" onclick="modif_champ(this)"><i class="fa-solid fa-pencil"></i></button>
        </div>
        </br>
        <div class="InfoProfil">
          <?php
            echo "Prenom: <span>" . $_SESSION["prenom"] . "</span>";
          ?>
          <button class="EditProfil" onclick="modif_champ(this)"><i class="fa-solid fa-pencil"></i></button>
        </div>
        </br>
        <div class="InfoProfil">
          <?php
            echo "Email: <span>" . $_SESSION["email"] . "</span>";
          ?>
        </div>
        </br>
        <div class="InfoProfil">
          <?php
            echo "Mot de passe: <span>" . $_SESSION["mdp"] . "</span>";
          ?>
          <button class="EditProfil" onclick="modif_champ(this)" ><i class="fa-solid fa-pencil"></i></button>
        </div>
        </br>
        <div class="InfoProfil">
          <?php
            echo "Tel: <span>" . $_SESSION["tel"] . "</span>";
          ?>
          <button class ="EditProfil" onclick="modif_champ(this)"><i class="fa-solid fa-pencil"></i></button>
        </div>
        </br>
        <div class="best-voyages">
          Reservation : 

          <?php 

            $transactions = json_decode(file_get_contents("Json/transactions.json"), true);
            
            foreach($transactions as $transaction){

              if($transaction["status"] == "accepted"){
               echo '<div class="voyage-item">';
                  echo   '<div class="voyage-content">';
                  echo        '<h3>'. $transaction["nom"] .'</h3>';

                  echo        '<p class="voyage-price">Wifi : '. $transaction["wifi"] .'</p>';
                  echo        '<p class="voyage-price">Animaux : '. $transaction["animaux"] .' </p>';
                  echo        '<p class="voyage-price">Date : '. $transaction["date"] .' </p>';
                  echo        '<p class="voyage-price">Durée : '. $transaction["duree"] .' </p>';
                  echo        '<p class="voyage-price">Cabines : '. $transaction["cabines"] .' </p>';
                  echo        '<p class="voyage-price">Parcours : '. $transaction["parcours"] .' </p>';
                  echo        '<p class="voyage-price">Personnes : '. $transaction["personnes"] .' </p>';
                  echo        '<p class="voyage-price">Demandes spéciales : '. $transaction["message"] .' </p>';
                  echo        '<p class="voyage-price"> Prix : '. $transaction["prix"] .' </p>';

                  echo    '</div>';
                  echo '</div>';
              } 
            }

          ?>

        </div>
        </br>
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
        </div>
        </br>
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
        </div>
        </br>
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
        </div>
        </br>
      </div>
    </main>
    
    <?php include "includes/footer.php" ?>

  </body>
</html>
