<?php
	session_start();
?>

<!DOCTYPE html>
<html>
  <head>
  		<meta charset = "utf-8">
  		<html lang = "fr">
      	<title>Stockholm | Viking Cruise</title>
      	<link rel="stylesheet" type="text/css" href="style.css">
	</head>
  <body id="accueil">
   	
   	<header>
		<h1> Viking Cruise </h1>
	</header>
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
  


	
	<div id="container2">
		<div id="right">

			<h4> <u> Selectionnez des options</u> </h4>

			<div id="Options">
				<div class="selectOptions">
					<label for="duree">Durée :</label>
					<select name="duree" id="duree">
						<option value="14">14 jours</option>
						<option value="21">21 jours</option>
					</select>      
				</div>
				<div class="selectOptions">
					<label for="typesCabines">Types Cabines</label>
					<select name="typesCabines" id="typesCabines">
						<option value="ee">Cabine Intérieure</option>
						<option value="lv">Cabine Exterieur</option>
						<option value="lt">Cabine avec Balcon</option>
					</select>      
				</div>
				<div class="selectOptions">
						<label for="nbCabines">Nombre de cabines (1-6) :</label>
            			<input type="number" id="nbCabines" name="nbCabines" min="1" max="6" />    
				</div>
				<div class="selectOptions">
					<input type="checkbox" id="wifi">
					<label for="wifi">Wifi - 10€/Jour</label>
				</div>
				<div class="selectOptions">
					<label for="restaration">Restauration :</label>
					<select name="restaration" id="restaration">
						<option value="a">Aucune</option>
						<option value="pc">Pension Complète</option>
						<option value="dp">Demi pension</option>
						<option value="pj">Petit déjeuner</option>
					</select>      
				</div>
				<div class="selectOptions">
					<input type="checkbox" id="animaux">
					<label for="animaux">Animaux - 8€/Jour </label>      
				</div>
				<div class="selectOptions">
					<label for="typesParcours">Parcours :</label>
					<select name="typesParcours" id="typesParcours">
						<option value="ee">Pass Liberté</option>
						<option value="lv">Flex 1</option>
						<option value="lt">Flex 2 (longue croisière)</option>
						
					</select>      
				</div>
				<div class="selectOptions">
					<input type="checkbox" id="parking">
					<label for="parking">Parking au port - 60€ </label>     
				</div>
			</div>	

			<div id="boutonmenubar2">
				<button class="boutonmenu"><a href="recapitulatif.php">Réservation</a></button>
			</div>
		</div>
		
		<div id="corps">
			<h2> A la découverte de l'archipel de Fasta Aland...</h2>

			<div id="texte-presentation">
				<p>
				Découvrez Stockholm, la capitale suédoise construite sur 14 îles, où histoire et modernité s’entrelacent harmonieusement.
				Flânez dans le Gamla Stan, la vieille ville médiévale aux ruelles pavées et aux façades colorées, visitez le majestueux Palais Royal, et plongez dans l’histoire maritime au Musée Vasa.
				Amateurs de nature, explorez l'archipel de Stockholm et ses 30 000 îles lors d’une excursion en bateau.
				</br> Côté gastronomie, savourez un smörgåsbord ou un kanelbulle lors d’une pause fika typiquement suédoise.
			 	Stockholm vous promet une escapade inoubliable. 
				</br>
				Laissez-vous séduire par cette ville fascinante avec notre agence !
				</p>
			</div>
			
			<div id="option-presentation">
				<div id="option-presentation-1">
					<p>Embarquez pour une aventure inoubliable en mer et profitez d’un large choix d’options pour rendre votre séjour encore plus agréable : </p>
				</div>
				<p>🌐 <strong>Wi-Fi à bord :</strong> Restez connecté où que vous soyez grâce à nos différentes formules Internet adaptées à vos besoins, que ce soit pour partager vos souvenirs ou pour le télétravail.</p>
				<p>🐾 <strong>Animaux bienvenus :</strong> Certaines de nos croisières acceptent les animaux de compagnie. Voyagez avec votre fidèle compagnon et profitez d'espaces dédiés à son confort.</p>
				<p>🍽 <strong>Formules de pension :</strong> Choisissez entre la pension complète, demi-pension ou encore des options à la carte pour savourer une cuisine raffinée à bord.</p>
				<p>🛏 <strong>Types de cabines :</strong> Optez pour une cabine intérieure confortable, une cabine avec balcon pour une vue imprenable, ou une suite luxueuse pour une expérience haut de gamme.</p>
				<p>🕒 <strong>Courte ou longue croisière :</strong> Que vous souhaitiez une escapade de quelques jours ou une traversée au long cours, nous avons des itinéraires adaptés à toutes vos envies.</p>
				<p>🚗 <strong>Parking au port :</strong> Stationnement sécurisé pour votre véhicule durant votre croisière.</p>	
			</div>

			<h2> Types de parcours proposés</h2>

			<div id="tableau-presentation">
				<table>
					<tr>
						<th class="TableauO1"> Pass Liberté </th>
						<th class="TableauO1"> Option Flex 1 </th>
						<th class="TableauO1"> Option Flex 2 </th>
					</tr>

					<tr>
						<td class="TableauO2">
							Grâce à votre <strong>Pass Liberté</strong>, vous êtes totalement autonomes pour explorer la ville à votre rythme dès votre arrivée à quai. Profitez de cette escale pour découvrir les trésors locaux, savourer la gastronomie, flâner dans les ruelles ou visiter les sites incontournables.  
							<br><br>
							<strong>Toutefois, n’oubliez pas :</strong> le navire repartira à l’heure prévue. Veillez à bien respecter l’heure de retour indiquée afin d’assurer un embarquement sans encombre.  
							<br><br>
							<em>Bonne découverte et profitez pleinement de votre liberté !</em> 🌍 
						</td>

						<td class="TableauO2"> 
							Grâce à l'option <strong>Flex 1</strong>, explorer les incontournables de la capitale suédoise ✨
							<br>
							<ul>
								<li><strong>Gamla Stan</strong> – Plongez dans l’histoire en arpentant les ruelles pavées de la vieille ville et admirez le Palais Royal.</li>
								<li><strong>Djurgården</strong> – Découvrez l’île des musées avec une visite du célèbre musée Vasa ou du musée ABBA selon vos préférences.</li>
								<li><strong>Skeppsholmen & les quais</strong> – Profitez d’une balade avec vue sur l’archipel et les bateaux traditionnels.</li>
								<li><strong>Stadshuset (Hôtel de Ville)</strong> – Admirez ce chef-d'œuvre architectural et sa tour emblématique qui offre une vue panoramique sur la ville.</li>
								<li><strong>Pause fika</strong> – Dégustez une spécialité suédoise dans un café typique pour une expérience locale authentique.</li>
							</ul>
							<em>Avec <strong>Flex 1</strong>, vous bénéficiez d’une organisation fluide et efficace pour voir l’essentiel de Stockholm en un jour, sans perdre de temps. Une option parfaite pour un premier aperçu de la ville. !</em> 🌍 
						</td>

						<td class="TableauO2"> 
							Grâce à l'option <strong>Flex 2</strong>, découvrez Stockholm en 48 heures en combinant visites incontournables et confort haut de gamme. ✨
							<br>
							<h5>🛬 Jour 1 - Découverte du centre historique</h5>
							<ul>
								<li><strong>Accueil et transfert</strong> vers votre hôtel 4 étoiles.</li>
								<li>Exploration de <strong>Gamla Stan</strong>, la vieille ville pittoresque.</li>
								<li><strong>Déjeuner suédois</strong> et visite du <strong>Musée Vasa</strong> ou du <strong>Musée ABBA</strong>.</li>
								<li><strong>Dîner et nuit</strong> dans un hôtel partenaire élégant.</li>
							</ul>
							<h5>🌅 Jour 2 - Nature et modernité</h5>
							<ul>
								<li><strong>Petit-déjeuner buffet</strong>, puis balade à <strong>Djurgården</strong> ou visite de <strong>Skansen</strong>.</li>
								<li><strong>Temps libre</strong> pour shopping ou détente dans un café suédois.</li>
								<li><strong>Transfert de retour</strong> en fin de journée.</li>
							</ul>
							<h5>🏨 Hébergement</h5>
            				<p>Séjour dans un <strong>hôtel 4 étoiles partenaire</strong>, avec chambre confortable, Wi-Fi et <strong>petit-déjeuner inclus</strong>.</p>
							<br>
							<em>Avec <strong>Flex 2</strong>, vous bénéficiez d’un programme efficace et équilibré, d'un hébergement premium et surtout, la liberté d’explorer à votre rythme !</em> 🌍 
						</td>
					</tr>
				</table>
				

				<p><strong><em>Réservez dès maintenant votre croisière idéale et laissez-vous porter par l’aventure maritime ! 🚢✨</em></strong></p>
			</div>
		</div>
	</div>

	<footer>
    	<p>&copy; 2025 - Viking Cruise | Voyagez en toute sérénité</p>
    </footer>

  </body>
</html>
