<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration | Viking Cruise</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">

</head>
<body>
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

                <div>
                    <h2>Liste des utilisateurs</h2>
                    <table id="Admin">
                        <tr>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Email</th>
                            <th>VIP</th>
                            <th>Réduction</th>
                            <th>Banni</th>
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
                                echo "<td>" . $util[0] . "</td>";
                                echo "<td>" . $util[1] . "</td>";
                                echo "<td>" . $util[3] . "</td>";
                                echo "<td>Non <button class='AdminProfil'></button></td>";
                                echo "<td>0% <button class='AdminProfil'></button></td>";
                                echo "<td>Non <button class='AdminProfil'></button></td>";
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
                    <li><a href="#">Suède</a></li>
                    <li><a href="#">Danemark</a></li>
                    <li><a href="#">Norvège</a></li>
                    <li><a href="#">Finlande</a></li>
                    <li><a href="#">Estonie</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Informations</h3>
                <ul class="footer-links">
                    <li><a href="#">À propos de nous</a></li>
                    <li><a href="#">Nos navires</a></li>
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