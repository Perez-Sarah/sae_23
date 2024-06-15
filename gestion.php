<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestion - Gestion des Bâtiments</title><!--title display-->
  <link rel="stylesheet" href="./styles/tableau.css"><!--insert style for html page-->
</head>
<body>
  <header>
    <h1>Gestion</h1><!--title on html page-->
    <nav>
      <ul><!--setting up buttons in order to move through different pages-->
        <li><a class="button" href="index.html">Accueil</a></li>
        <li><a class="button" href="login_admin.php">Administration</a></li>
        <li><a class="button" href="login_gestion.php">Gestion</a></li>
	<li><a class="button" href="consul.php">Consultation</a></li>
        <li><a class="button" href="gestion_projet.html">Gestion de projet</a></li>
	<li><a class="button" href="logout_gestion.php">Déconnexion</a></li>	
      </ul>
    </nav>
  </header>
  <section><!--separate the different parts-->
    <h3>Connexion réussie !</h2><!--first part-->
    <h2>Mesures des capteurs</h2>
    <p>Affichage des mesures, moyennes, min et max pour les salles du bâtiment géré.</p>
    <div style="position:absolute; left:10px; " class="tableau">
			<table class="tableau">
				<tr>
					<th>
						<p class="p">Date&heure</p>
					</th>
					<th>
						<p class="p">Piece</p>
					</th>
					<th>
						<p class="p">Temperature (en degres celsus)</p>
					</th>
				</tr>
				<tr>
					<th>
						<p class="p">14/06/24-17:05:10</p>
					</th>
					<th>
						<p class="p">E208</p>
					</th>
					<th>
						<p class="p">22</p>
					</th>
				</tr>
				<tr>
					<th>
						<p class="p">14/06/24-17:05:10</p>
					</th>
					<th>
						<p class="p">E007</p>
					</th>
					<th>
						<p class="p">20</p>
					</th>
				</tr>
				<tr>
					<th>
						<p class="p">14/06/24-17:05:10</p>
					</th>
					<th>
						<p class="p">B106</p>
					</th>
					<th>
						<p class="p">22</p>
					</th>
				</tr>
				<tr>
					<th>
						<p class="p">14/06/24-17:05:10</p>
					</th>
					<th>
						<p class="p">B111</p>
					</th>
					<th>
						<p class="p">21</p>
					</th>
				</tr>
					<th>
						<p class="p">14/06/24-17:05:10</p>
					</th>
					<th>
						<p class="p">E208</p>
					</th>
					<th>
						<p class="p">20</p>
					</th>
				</tr>
				<tr>
					<th>
						<p class="p">14/06/24-17:05:10</p>
					</th>
					<th>
						<p class="p">E007</p>
					</th>
					<th>
						<p class="p">22</p>
					</th>
				</tr>
				<tr>
					<th>
						<p class="p">14/06/24-17:05:10</p>
					</th>
					<th>
						<p class="p">B106</p>
					</th>
					<th>
						<p class="p">20</p>
					</th>
				</tr>
				<tr>
					<th>
						<p class="p">14/06/24-17:05:10</p>
					</th>
					<th>
						<p class="p">B111</p>
					</th>
					<th>
						<p class="p">21</p>
					</th>
				</tr>
				</table><br/><br/><br/><br/><br/><br/>
		</div><br/><br/><br/><br/><br/><br/>
		</br><br/>
		  </section>
  <footer><!--footnote-->
    <li><a href="https://www.iut-blagnac.fr/fr" target="_blank">IUT de Blagnac</a></li>
    <li>Département Réseaux et Télécommunications</li>
  </footer>
</body>
</html>

