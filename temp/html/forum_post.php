<?php include("header.php"); ?>
 	
<main id="main" class="container">
	<div id="content">
		<div id="contentForumAccueil">

				<ol class="breadcrumb">
						  <li><a href="index.php">Home</a></li>
						  <li><a href="forum_accueil.php">Forum</a></li>
						  <li><a href="forum_sujets.php">SOS dev en détresse</a></li>
						  <li class="active">J'y arrive pas avec ma div purple</li>
				</ol>
				<h1>&lt;SOS dev en détresse&gt;</h1>
			<hr>
			<nav>
				<div class="pagination">1</div> 
				<div class="pagination">2</div> 
				<div class="pagination">3</div> 
	
				<button>Répondre</button>
			</nav>
			<table class="rubriqueForum">
				<tr>
					<td colspan="2">
						<p>Sujet : J'y arrive pas avec ma div purple</p>
					</td>
				</tr>
				<tr class="canvasForumPost">
					<td class="utilisateurForumPost">
						<p class="nomUtilisateurForumPost">Plaidwige Attias</p>
						<img src="../img/neo1.jpg" />
					</td>
					<td class="contenuForumPost">
						<p>Bonjour, j'ai un gros souci. J'ai créé un tableau multidimensionnel avec calcul d'intégral, intégration d'images de chat et simulation de bobsleg dedans et rien n'apparait sauf une div purple. Je fais comment moi putain ? J'suis tellement vénère ; j'ai juste envie de m'enfermer dans mes toilettes pour manger des sardines... ! </p>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<p class="dateForumPost">26/05/2015 à 14h53</p>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<div></div>
					</td>
				</tr>
				<tr class="canvasForumPost">
					<td class="utilisateurForumPost">
						<p class="nomUtilisateurForumPost">Ziad Coco</p>
						<img src="../img/ziad_jaagoub.jpeg" />
					</td>
					<td class="contenuForumPost">
						<p>Wow, c'est vraiment du code de noob ce que tu as nous fait là. Recommence tout depuis la ligne 2 stp.</p>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<p class="dateForumPost">26/05/2015 à 15h33</p>
					</td>
				</tr>
				
			</table>

		</div>

<?php include("sidebar.php"); ?>		

<?php include("footer.php"); ?>

