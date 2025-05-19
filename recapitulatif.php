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
    <title>Viking Cruise | Croisières en Mer Baltique</title>
    <link rel="stylesheet" href="style.css" id="theme-style" >

    <script src="Javascript/darkmode.js" defer></script>

    
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body id="accueil">
    
    
    <?php include "includes/header.php" ?>


    <br>
    <br>                 
    <br> 
    <br> 
    <br> 
    <br> 
    <br> 
    <br> 
    <br> 
    <br> 
    <br> 
    <br> 
    <br> 
    <br> 
    <br> 

    <button onclick="history.back()"> Cliquer ici pour modifier vos informations de voyage </button>
    <?php 



    //CALCUL DU MONTANT
    $montant=0;

    $fichier_voy = fopen("donnees/voyages.csv", "r") or die("Impossible d'ouvrir le fichier !");

    while(!feof($fichier_voy)){

        $voy = fgets($fichier_voy);
        //Si la ligne n'est pas vide (une ligne vide a un caractère " " et "\n" d'où >2)        
            $infos_voy = str_getcsv($voy, ";", " ");

            $nom = $infos_voy[0];
            if($nom==$_POST['destination']){

                if($_POST['duree']=="14"){
                    $prix = intval($infos_voy[2]);
                }
                else{
                    $prix = intval($infos_voy[3]);
                }

                if($_POST['cabines']=="Cabine Standard"){
                    $prix += 0;
                }
                else if($_POST['cabines']=="Cabine avec Balcon"){
                    $prix += 50 * intval($_POST['duree']);
                }
                else if($_POST['cabines']=="Suite Deluxe"){
                    $prix += 150 * intval($_POST['duree']);
                }

                if($_POST['parcours']=="Pass Liberté"){
                    $prix += 0;
                }
                else if($_POST['parcours']=="Flex 1"){
                    $prix += 100;
                }
                else if($_POST['parcours']=="Flex 2"){
                    $prix += 300;
                }

                if(isset($_POST["wifi"])){
                    $prix += 10 * intval($_POST['duree']);
                }
                if(isset($_POST["animaux"])){
                    $prix += 8 * intval($_POST['duree']);
                }
                
                $montant = $prix * intval($_POST['personnes']);      
        }   
    }

    fclose($fichier_voy);



    //AFFICHAGE RECAPITULATIF

    echo '<div> Nom : ' . $_POST["noms"] . ' </div>';
    echo '<div> Prenom : ' . $_POST["prenoms"] . ' </div>';
    echo '<div> Telephone : ' . $_POST["telephone"] . ' </div>';
    echo '<div> Mail : ' . $_POST["mail"] . ' </div>';
    echo '<div> Date de départ : ' . $_POST["date"] . ' </div>';
    echo '<div> Croisière : ' . $_POST["destination"] . ' </div>';
    echo '<div> Parcours : ' . $_POST["parcours"] . ' </div>';
    echo '<div> Durée : ' . $_POST["duree"] . ' </div>';
    echo '<div> Cabines : ' . $_POST["cabines"] . ' </div>';
    echo '<div> Nombre de personnes : ' . $_POST["personnes"] . ' </div>';
    echo '<div> Montant à payer : ' . $montant . '€ </div>';
 
    require "getapikey.php";

    $transaction = uniqid();
    $vendeur = "MI-2_E";
    $api_key = getAPIKey($vendeur);
    $http= $_SERVER['HTTP_HOST'];
        $path= dirname($_SERVER['SCRIPT_NAME']);
        $path= rtrim($path, '/');
        $retour = 'http://'.$http.$path.'/retour.php?a=0';


        $control = md5($api_key . "#" . $transaction . "#" . $montant . "#" . $vendeur . "#" . $retour . "#");

        echo "<form action='https://www.plateforme-smc.fr/cybank/' method='POST'>";
        echo "    <input type='hidden' name='transaction' value='".$transaction."'>";
        echo "    <input type='hidden' name='montant' value='".$montant."'>";
        echo "    <input type='hidden' name='vendeur' value='".$vendeur."'>";
        echo "    <input type='hidden' name='retour' value='".$retour."'>";
        echo "    <input type='hidden' name='control' value='".$control."'>";
        echo "    <input type='submit' value='".$montant."€'>";
        echo "</form>";


    

    ?>

    
    <?php include "includes/footer.php" ?>


</body>
</html>
