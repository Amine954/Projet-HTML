<?php
session_start();


if (isset($_POST['email'])) {
    $email = trim($_POST['email']);

    $nom_fichier = "../donnees/identifiant.csv";

    $fichier = fopen($nom_fichier, "r+") or die("Impossible d'ouvrir le fichier");
    $nouveau_fichier = [];
    while(($utilisateur_infos_ligne=fgets($fichier)) !== false){

		$utilisateur_infos=str_getcsv(trim($utilisateur_infos_ligne), ";");

	    if($utilisateur_infos[3] == $email){
       
			if(isset($utilisateur_infos[6]) && trim($utilisateur_infos[6]) === "non"){
				$utilisateur_infos[6] = "oui";
                $_SESSION['VIP'] = "oui";
            }
            else{
                $utilisateur_infos[6] = "non";
                $_SESSION['VIP'] = "non";
            }
				
        }

       

        $nouveau_fichier[] = implode(";", $utilisateur_infos);
    }

    fclose($fichier);

    
    file_put_contents($nom_fichier, implode(PHP_EOL, $nouveau_fichier));

} 




?>