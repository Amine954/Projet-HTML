<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viking Cruise | Croisières en Mer Baltique</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body id="accueil">
    
    <header>
        <nav>
            <div id="listemenubar">
                <ul class="listemenu">
                    <?php
                        echo "<li><a href='index.php'>Accueil</a></li>";
                        echo "<li><a href='presentation.php'>Présentation</a></li>" ;
                        if(isset($_SESSION["statut"]) && ($_SESSION["statut"] === "connecte_admin" || $_SESSION["statut"] === "connecte_client")){
                            echo "<li><a href='profil.php'>Profil</a></li>";
                        }
                        else{
                            echo "<li><a href='connexion.php'>Profil</a></li>";
                        }

                        echo "<li><a href='recherche.php'>Recherche</a></li>";
                        if(isset($_SESSION["statut"]) && ($_SESSION["statut"] === "connecte_admin" || $_SESSION["statut"] === "connecte_client")){
                            echo "<li><a href='reservation.php'>Réservation</a></li>";
                        }
                        else{
                            echo "<li><a href='connexion.php'>Réservation</a></li>";
                        }
                        
                        if(isset($_SESSION["statut"]) && $_SESSION["statut"] === "connecte_admin"){
                            echo "<li><a href='administrateur.php'>Administration</a></li>";
                        }
                    ?>                   
                    
                </ul>
            </div>
            <div id="boutonmenubar">
                <?php
                    if(isset($_SESSION["statut"]) && ($_SESSION["statut"] === "connecte_admin" || $_SESSION["statut"] === "connecte_client")){
                        echo "<button class='boutonmenu'><a href='profil.php'>Inscription</a></button>";
                        echo "<button class='boutonmenu'><a href='profil.php'>Connexion</a></button>";
                        echo "<button class='boutonmenu' id='deconnexion'><a href='deconnexion.php'>Déconnexion</a></button>";
                    }
                    else{
                        echo "<button class='boutonmenu'><a href='inscription.php'>Inscription</a></button>";
                        echo "<button class='boutonmenu'><a href='connexion.php'>Connexion</a></button>";
                    }
                ?>
            </div>
        </nav>
    </header>

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

    <footer>
    <div class="footer-content">
            <div class="footer-column">
                <h3>Viking Cruise</h3>
                <p>Voyagez en toute sérénité à travers les plus belles destinations de la mer Baltique et de la Scandinavie.</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="footer-column">
                <h3>Destinations</h3>
                <ul class="footer-links">
                    <li><a href="nordhavn.php">Nordhavn</a></li>
                    <li><a href="fjorddrakkar.php">Fjorddrakkar</a></li>
                    <li><a href="yggdrasil.php">Yggdrasil</a></li>
                    <li><a href="solstorm.php">Solstorm</a></li>
                    <li><a href="valkyra.php">Valkyra</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Informations</h3>
                <ul class="footer-links">
                    <li><a href="presentation.php">À propos de nous</a></li>
                    <li><a href="presentation.php#navires">Nos navires</a></li>
                    <li><a href="#">Conditions générales</a></li>
                    <li><a href="#">Politique de confidentialité</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Contact</h3>
                <ul class="footer-links">
                    <li><i class="fas fa-phone"></i> +33 1 23 45 67 89</li>
                    <li><i class="fas fa-envelope"></i> contact@vikingcruise.com</li>
                    <li><i class="fas fa-map-marker-alt"></i> 123 Rue de la Mer, Paris</li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; 2025 - Viking Cruise | Tous droits réservés</p>
        </div>
    </footer>

</body>
</html>
