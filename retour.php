<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$_GET["status"];
$_GET["transaction"];


            $fichier_voy = fopen("donnees/voyages.csv", "r") or die("Impossible d'ouvrir le fichier !");

                while(!feof($fichier_voy)){

                    $voy = fgets($fichier_voy);
                    //Si la ligne n'est pas vide (une ligne vide a un caractère " " et "\n" d'où >2)
                    if(strlen($voy) > 2){

                                
                $infos_voy = str_getcsv($voy, ";", " ");
                
                $nom = $infos_voy[0];
            

                if (isset($_SESSION[$nom . "_cart"])){
                    unset($_SESSION[$nom . "_cart"]);
                    unset($_SESSION[$nom . "_wifi"]);
                    unset($_SESSION[$nom . "_animaux"]);
                    unset($_SESSION[$nom . "_date"]);
                    unset($_SESSION[$nom . "_duree"]);
                    unset($_SESSION[$nom . "_cabines"]);
                    unset($_SESSION[$nom . "_parcours"]);
                    unset($_SESSION[$nom . "_personnes"]);
                    unset($_SESSION[$nom . "_message"]);
                    unset($_SESSION[$nom . "_prix"]);
                }   
            }
        }

        fclose($fichier_voy);


header("location: index.php");
?>

