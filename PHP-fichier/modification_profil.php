<?php
session_start();

if (isset($_POST['email'])) {
    $email = trim($_POST['email']);
    $nom = trim($_POST['nom']);
    $prenom = trim($_POST['prenom']);
    $mdp = trim($_POST['mdp']);
    $tel = trim($_POST['tel']);

    $nom_fichier = "../donnees/identifiant.csv";

    $fichier = fopen($nom_fichier, "r") or die("Impossible d'ouvrir le fichier");
    $nouveau_fichier = [];
    while(($utilisateur_infos_ligne=fgets($fichier)) !== false){

	    
		$utilisateur_infos=str_getcsv(trim($utilisateur_infos_ligne), ";");

	    if($utilisateur_infos[3] == $email){

			$utilisateur_infos[0] = $nom;
            $utilisateur_infos[1] = $prenom;
            $utilisateur_infos[2] = $mdp;
            $utilisateur_infos[4] = $tel;

            $_SESSION['nom'] = $nom;
            $_SESSION['prenom'] = $prenom;
            $_SESSION['mdp'] = $mdp;
            $_SESSION['tel'] = $tel;
        }

       

        $nouveau_fichier[] = implode(";", $utilisateur_infos);
    }

    fclose($fichier);

    
    file_put_contents($nom_fichier, implode(PHP_EOL, $nouveau_fichier));

} 