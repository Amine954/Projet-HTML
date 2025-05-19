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

    <script src="Javascript/darkmode.js" defer></script>

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">

</head>
<body>
	
    <?php include "includes/header.php" ?>

	
	<div id="main">
        <img src="https://images.unsplash.com/photo-1548574505-5e239809ee19?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2071&q=80" alt="Vue aérienne de la mer Baltique" />
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
                
                <div class="admin-controls">
                    <div class="admin-search">
                        <input type="text" placeholder="Rechercher un utilisateur..." class="admin-search-input">
                        <button class="admin-search-button"><i class="fas fa-search"></i></button>
                    </div>
                    <div class="admin-filters">
                        <select class="admin-filter">
                            <option value="">Tous les statuts</option>
                            <option value="vip">VIP</option>
                            <option value="standard">Standard</option>
                            <option value="banned">Banni</option>
                        </select>
                        <button class="cta-button admin-add-user"><i class="fas fa-user-plus"></i> Ajouter</button>
                    </div>
                </div>

                <div class="admin-table">
                    <h2>Liste des utilisateurs</h2>
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
                            $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                            while(!feof($fichier_util)){

                                $util = fgets($fichier_util);
                                //Si la ligne n'est pas vide (une ligne vide a un caractère " " et "\n" d'où >2)
                                if(strlen($util) > 2){
                                    
                                    $infos_util = str_getcsv($util, ";", " ");

                                    if($infos_util[5] === "client"){
                                        $utils_infos[] = $infos_util;
                                    }
                                }
                            }

                            fclose($fichier_util);
                            $total_utils = count($utils_infos);
                            $total_pages = ceil($total_utils / $utils_par_page);
                            $page = max(1, min($page, $total_pages));
                            $indice_debut_page = ($page - 1) * $utils_par_page;
                            $pagination = array_slice($utils_infos, $indice_debut_page, $utils_par_page);
                            
                            foreach($pagination as $util){
                                echo "<tr>";
                                echo "<td>" . $util[0] . " </td>";
                                echo "<td>" . $util[1] . " </td>";
                                echo "<td>" . $util[3] . " </td>";
                                echo "<td></td>";
                                echo "<td>" . $util[6] . " </td>";
                                echo "<td><button ><i class=\"fa-solid fa-star\"></i></button></td>";
                                echo "<td>" . $util[7] . " </td>";
                                echo "<td><button ><i class=\"fa-solid fa-money-bill\"></i></button></td>";
                                echo "<td>" . $util[8] . " </td>";
                                echo "<td><button ><i class=\"fa-solid fa-hammer\"></i></button></td>";
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
                                echo "<a href='?page=$i'>$i</a>";
                            }
                        }
                    ?>
            </div>

        </section>
    </main>

    
    <?php include "includes/footer.php" ?>

</body>
</html>