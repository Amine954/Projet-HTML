<!DOCTYPE html>
<html>
  <head>
  		<meta charset = "utf-8">
  		<html lang = "fr">
      	<title>Connexion | Viking Cruise</title>
      	<link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>

  <header>
		<h1> Viking Cruise </h1>
	</header>

	<nav>
		<div id="listemenubar">
			<ul class="listemenu">
				<li><a href="index.html">Accueil</a></li>
				<li><a href="presentation.html">Présentation</a></li>
				<li><a href="profil.html">Profil</a></li>
				<li><a href="recherche.html">Recherche</a></li>
				<li><a href="reservation.html">Réservation</a></li>
				<li><a href="administrateur.php">Administration</a></li>
			</ul>
		</div>
		<div id="boutonmenubar">
			<button class="boutonmenu"><a href=inscription.php>Inscription</a></button>  
			<button class="boutonmenu"><a href="connexion.php">Connexion</a></button>
		</div>
	</nav>

  <main>
		<div class="container">
			<h2>Formulaire de connexion</h2>
			<form id="reservationformulaire" action="Verification_connexion.php" method="POST">
				
			<label class="reservationlabel" for="email">Email :</label>
			<input class ="reservationchamp" type="email" id="email" name="email" placeholder="Votre email" required/>

			<label class ="reservationlabel" for="password">Mot de passe :</label>
			<input class ="reservationchamp" type="password" name="mot_de_passe" id="mot_de_passe" required/>
				
     		 <br/>

			<button class="submit">Se connecter</button>
        
      		<br/>
      		<a href="inscription.php">Pas inscrit ? <u>Inscrivez vous ici !</u></a>

			<?php 
				switch($_GET['error']){
					case "email_mdp": 
						echo "<p style='color:red; text-align:center'>Email inexistant et mot de passe non valide</p>";
						break;
						
					case "mdp": 
						echo "<p style='color:red; text-align:center'>Mot de passe non valide</p>";
						break;
						
					case "email": 
						echo "<p style='color:red; text-align:center'>Email inexistant</p>";
						break;
				 }
	 		 ?>

			</form>
		</div>
	</main>

  <footer>
    <p>&copy; 2025 - Viking Cruise</p>
  </footer>

  </body>
</html>
