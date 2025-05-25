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
    <title>Administration | Viking Cruise</title>
    <link rel="stylesheet" href="style.css" id="theme-style" >
    <script src="Javascript/administrateur.js"></script>

    <script src="Javascript/darkmode.js" defer></script>

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">

</head>
<body>
	
    <?php include "includes/header.php" ?>
    
	<div id="main">
        <img src="https://cdn.futura-sciences.com/sources/images/mer-baltique-givre-rivage-.jpeg" alt="Vue aérienne de la mer Baltique" />
        <div class="hero-text">
            <h2>Nos administrateurs</h2>
            <p>Pour toutes question ou informations supplémtaires, veuillez contacter une personne de cette liste</p>
        </div>
    </div>

    <main class="container" style="padding-top: 60px;">
        <section class="admin-header">
            <h2><i class="fas fa-users-cog"></i> Panneau d'Administration</h2>
            <p class="admin-intro">Gérez les utilisateurs, leurs statuts et leurs privilèges sur la plateforme Viking Cruise.</p>
        </section>

        <section class="admin-content">
            <div class="admin-card">
                <h3><i class="fas fa-user-shield"></i> Liste des utilisateurs</h3>

                <div class="admin-table">

                    <table id="Admin">
                        <tr>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Email</th>
                            <th></th>
                            <th>VIP</th>
                            <th></th>
                            <th>Réduction</th>
                            <th></th>
                            <th>Banni</th>
                            <th></th>
                            
                        </tr>
                        
                        <?php
                            $fichier_util = fopen("donnees/identifiant.csv", "r") or die("Impossible d'ouvrir le fichier !");
                            
                            $utils_par_page = 5;
                            $utils_infos = [];
                            if(!isset($_GET['page'])){
                                $_GET['page'] = 1;
                            } 
                            while(!feof($fichier_util)){

                                $util = fgets($fichier_util);
                                //Si la ligne n'est pas vide (une ligne vide a un caractère " " et "\n" d'où >2)
                                if(strlen($util) > 2){
                                    
                                    $infos_util = str_getcsv($util, ";", "");

                                    if($infos_util[5] === "client"){
                                        $utils_infos[] = $infos_util;
                                    }
                                }
                            }

                            fclose($fichier_util);
                            $total_utils = count($utils_infos);
                            $total_pages = ceil($total_utils / $utils_par_page);
                            $page = (int)$_GET['page'];
                            $indice_debut_page = ($page - 1) * $utils_par_page;
                            $pagination = array_slice($utils_infos, $indice_debut_page, $utils_par_page);
                            
                            foreach($pagination as $util){
                                //Important : ne pas mettre d'espace pour que les fonctions de modifications fonctionnent
                                echo "<tr>";
                                echo "<td>" . trim($util[0]) . "</td>";
                                echo "<td>" . trim($util[1]) . "</td>";
                                echo "<td>" . trim($util[3]) . "</td>";
                                echo "<td></td>";
                                echo "<td>" . trim($util[6]) . "</td>";
                                echo "<td><button onclick='Modification_VIP(this)' ><i class=\"fa-solid fa-star\"></i></button></td>";
                                echo "<td>" . trim($util[7]) . "</td>";
                                echo "<td><button onclick='Modification_reduc(this)'><i class=\"fa-solid fa-money-bill\"></i></button></td>";
                                echo "<td>" . trim($util[8]) . "</td>";
                                echo "<td><button onclick='Modification_BAN(this)'><i class=\"fa-solid fa-hammer\"></i></button></td>";
                                echo "</tr>";
                            }           
                        ?>

                    </table>
                </div>
            </div>
            <div id="admin-pagination">
                    <?php
                        for($i = 1; $i <= $total_pages; $i++) {
                            if($i == $page) {
                                echo "<strong>$i</strong>";
                            }
                            else{
                                echo "<a href=administrateur.php?page=$i>$i</a>";
                            }
                        }
                    ?>
            </div>

        </section>
    </main>
    
    <?php include "includes/footer.php" ?>

</body>
</html>