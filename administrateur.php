<!DOCTYPE html>
<html>
  <head>
  		<meta charset = "utf-8">
  		<html lang = "fr">
      	<title>Administration | Viking Cruise</title>
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
			<tr>
				<td>Dupond</td>
				<td>Bertrand</td>
				<td>Bertrand56@vikcruise.fr</td>
				
				<td>Non
					<button class="AdminProfil"><img class="EditProfilImg" alt="Bouton edition profil" src="https://cdn-icons-png.flaticon.com/512/266/266146.png"/></button></td>
				<td>00%   
					<button class="AdminProfil"><img class="EditProfilImg" alt="Bouton edition profil" src="https://cdn-icons-png.flaticon.com/512/266/266146.png"/></button></td>
				<td>Non  
					<button class="AdminProfil"><img class="EditProfilImg" alt="Bouton edition profil" src="https://cdn-icons-png.flaticon.com/512/266/266146.png"/></button></td>
			</tr>
			<tr>
				<td>Tyrold</td>
				<td>Gertrude</td>
				<td>Fraise594@vikcruise.fr</td>
				<td>Oui  
					<button class="AdminProfil"><img class="EditProfilImg" alt="Bouton edition profil" src="https://cdn-icons-png.flaticon.com/512/266/266146.png"/></button></td>
				<td>15%  
					<button class="AdminProfil"><img class="EditProfilImg" alt="Bouton edition profil" src="https://cdn-icons-png.flaticon.com/512/266/266146.png"/></button></td>
				<td>Non  
					<button class="AdminProfil"><img class="EditProfilImg" alt="Bouton edition profil" src="https://cdn-icons-png.flaticon.com/512/266/266146.png"/></button></td>
			</tr>
			<tr>
				<td>Tyrold</td>
				<td>Roland</td>
				<td>Rolrol@vikcruise.fr</td>
				<td>Oui  
					<button class="AdminProfil"><img class="EditProfilImg" alt="Bouton edition profil" src="https://cdn-icons-png.flaticon.com/512/266/266146.png"/></button></td>
				<td>15%  
					<button class="AdminProfil"><img class="EditProfilImg" alt="Bouton edition profil" src="https://cdn-icons-png.flaticon.com/512/266/266146.png"/></button></td>
				<td>Non  
					<button class="AdminProfil"><img class="EditProfilImg" alt="Bouton edition profil" src="https://cdn-icons-png.flaticon.com/512/266/266146.png"/></button></td>
			</tr>
			<tr>
				<td>Dubois</td>
				<td>Jean</td>
				<td>Dubois77@vikcruise.fr</td>
				<td>Non  
					<button class="AdminProfil"><img class="EditProfilImg" alt="Bouton edition profil" src="https://cdn-icons-png.flaticon.com/512/266/266146.png"/></button></td>
				<td>00%   
					<button class="AdminProfil"><img class="EditProfilImg" alt="Bouton edition profil" src="https://cdn-icons-png.flaticon.com/512/266/266146.png"/></button></td>
				<td>Oui  
					<button class="AdminProfil"><img class="EditProfilImg" alt="Bouton edition profil" src="https://cdn-icons-png.flaticon.com/512/266/266146.png"/></button></td>
			</tr>
			<tr>
				<td>Guerand</td>
				<td>Frank</td>
				<td>France7@vikcruise.fr</td>
				<td>Oui 
					<button class="AdminProfil"><img class="EditProfilImg" alt="Bouton edition profil" src="https://cdn-icons-png.flaticon.com/512/266/266146.png"/></button></td>
				<td>35%  
					<button class="AdminProfil"><img class="EditProfilImg" alt="Bouton edition profil" src="https://cdn-icons-png.flaticon.com/512/266/266146.png"/></button></td>
				<td>Non  
					<button class="AdminProfil"><img class="EditProfilImg" alt="Bouton edition profil" src="https://cdn-icons-png.flaticon.com/512/266/266146.png"/></button></td>
			</tr>




		</table>
	</div>
    <footer>
        <p>&copy; 2025 - Viking Cruise</p>
    </footer>
  </body>
</html>
