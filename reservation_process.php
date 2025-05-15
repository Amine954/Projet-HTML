<?php
session_start();

$_SESSION['noms']=$_POST['noms'];
$_SESSION['prenoms']=$_POST['prenoms'];
$_SESSION['mail']=$_POST['mail'];
$_SESSION['telephone']=$_POST['telephone'];
$_SESSION['date']=$_POST['date'];
$_SESSION['destination']=$_POST['destination'];
$_SESSION['duree']=$_POST['duree'];
$_SESSION['cabines']=$_POST['cabines'];
$_SESSION['personnes']=$_POST['personnes'];
$_SESSION['montant']=0;

$fichier_voy = fopen("donnees/voyages.csv", "r") or die("Impossible d'ouvrir le fichier !");

while(!feof($fichier_voy)){

    $voy = fgets($fichier_voy);
    //Si la ligne n'est pas vide (une ligne vide a un caractère " " et "\n" d'où >2)        
        $infos_voy = str_getcsv($voy, ";", " ");

        $nom = $infos_voy[0];
        if($nom==$_SESSION['destination']){

            if($_SESSION['duree']=="14"){
                $prix = intval($infos_voy[2]);
            }
            else{
                $prix = intval($infos_voy[3]);
            }

            if($_SESSION['cabines']=="Cabine Standard"){
                $prix += 0;
            }
            else if($_SESSION['cabines']=="Cabine avec Balcon"){
                $prix += 50 * intval($_SESSION['duree']);
            }
            else if($_SESSION['cabines']=="Suite Deluxe"){
                $prix += 150 * intval($_SESSION['duree']);
            }

            if(isset($_SESSION["wifi"])){
                $prix += 10 * intval($_SESSION['duree']);
            }
            if(isset($_SESSION["animaux"])){
                $prix += 8 * intval($_SESSION['duree']);
            }
            
            $_SESSION['montant'] = $prix * intval($_SESSION['personnes']);      
    }   
}

fclose($fichier_voy);

header("Location: recapitulatif.php");

?>