<!DOCTYPE html>
<html>
  <head>
  		<meta charset = "utf-8">
  		<html lang = "fr">
      	<title>Inscription | Viking Cruise</title>
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
				<li><a href="administrateur.html">Administration</a></li>
			</ul>
		</div>
		<div id="boutonmenubar">
			<button class="boutonmenu"><a href=inscription.php>Inscription</a></button>  
			<button class="boutonmenu"><a href="connexion.php">Connexion</a></button>
		</div>
	</nav>

  <main>
		<div class="container">
			<h2>Formulaire d'inscription</h2>
			<form id="reservationformulaire" action="enregistrement_inscription.php" method="POST">

			<label class="reservationlabel" for="nom">Nom :</label>
			<input class ="reservationchamp" type="text" id="nom" name="nom" placeholder="Votre nom" required>

      		<label class="reservationlabel" for="nom">Prénom:</label>
			<input class ="reservationchamp" type="text" id="prenom" name="prenom" placeholder="Votre prénom" required>

			<label class="reservationlabel" for="email">Email :</label>
			<input class ="reservationchamp" type="email" id="email" name="email" placeholder="Votre email" required>

      		<label class ="reservationlabel" for="password">Mot de passe :</label>
			<input class ="reservationchamp" type="password" name="mot_de_passe" id="mot_de_passe" required/>

			<label class="reservationlabel" for="telephone">Téléphone :</label>
			<input class ="reservationchamp" type="tel" id="telephone" name="telephone" placeholder="Votre numéro" required>

      <br/>
      <em> En cliquant sur "S'inscrire", vous vous engagez à accepter les conditions d'utilisations </em>
      <br/>

			<button class="submit">S'inscrire</button>

      <br/>
      <a href="connexion.php">Déjà un compte ? <u>Connectez vous ici !</u></a>

		  </form>
	  </div>
	</main>

  <footer>
    <p>&copy; 2025 - Viking Cruise</p>
  </footer>

  </body>
</html>
