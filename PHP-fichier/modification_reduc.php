<?php
session_start();

if (isset($_POST['email'])) {
    $email = trim($_POST['email']);
    $reduc = trim($_POST['reduc']);

    $nom_fichier = "../donnees/identifiant.csv";

    $fichier = fopen($nom_fichier, "r") or die("Impossible d'ouvrir le fichier");
    $nouveau_fichier = [];
    while(($utilisateur_infos_ligne=fgets($fichier)) !== false){

	    
		$utilisateur_infos=str_getcsv(trim($utilisateur_infos_ligne), ";");

	    if($utilisateur_infos[3] == $email){

			$utilisateur_infos[7] = $reduc;
      $_SESSION['reduc'] = $reduc;
        }

       

        $nouveau_fichier[] = implode(";", $utilisateur_infos);
    }

    fclose($fichier);

    
    file_put_contents($nom_fichier, implode(PHP_EOL, $nouveau_fichier));

} 




?>