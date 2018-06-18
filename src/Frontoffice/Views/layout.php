<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title><?php echo $parameters['title']; ?> | WF3 Alumni</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/base_thierry.css">
	<link rel="stylesheet" href="css/base_ingrid.css">
	<link rel="stylesheet" href="css/inscription.css">
	<link rel="stylesheet" href="css/offre_detail.css">
	<link rel="stylesheet" href="css/news_detail.css">
	<link rel="stylesheet" href="css/page-contact.css">
	<link rel="stylesheet" href="css/page-projets-realises.css">
	<link rel="stylesheet" href="css/toolsBox.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<header id="header">
		<div class="container">
			<div id="logo"></div>
			<nav id="nav-bar">

				<ul class="nav">
					<li><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>

					<li><a href="#">La formation</a>			
						<ul class="subnav">
							<li><a href="enseignements.php">Les enseignements</a></li>
							<li><a href="formateurs.php">Les formateurs</a></li>
							<li><a href="projets_realises.php">Les projets réalisés</a></li>
							<li><a href="depot_projet.php">Proposer un projet</a></li>
						</ul>						
					</li>
				
					<li><a href="news.php">Actualités</a></li>
					
					<li><a href="connexion.php">Agenda</a></li>
					<li><a href="#">Annuaires</a>			
						<ul class="subnav">
							<li><a href="alumni_mapping.php">Alumni mapping</a></li>
							<li><a href="annuaire_etudiants.php">Anciens étudiants</a></li>
							<li><a href="entreprises.php">Entreprises</a></li>
						</ul>
					</li>	
					<li><a href="#">Offres d'emploi</a>			
						<ul class="subnav">
							<li><a href="offres.php">Voir les offres</a></li>
							<li><a href="depot_offre.php">Déposer une offre</a></li>
						</ul>

					</li>
					<li><a href="toolsBox.php">Boite à outils</a></li>
					<li><a href="forum_accueil.php">Forum</a></li>
					<li><a href="contact.php">Contact</a></li>
					
				</ul><!-- .nav -->
			</nav><!-- #nav-bar -->
		</div><!-- .container -->
	</header>

	<?php include($content); ?>

	<?php include($sidebar); ?>
	</main>

<footer id="footer">
			<div id="footer-links" class="clearfix">
			
				<div id="sitemap">
					<h1>Accès rapide</h1>
					<ul class="sitemap-box">
						<li>La formation
							<ul>
								<li><span class="glyphicon glyphicon-option-vertical"></span><a href="enseignements.php">Les enseignement</a></li>
								<li><span class="glyphicon glyphicon-option-vertical"></span><a href="formateurs.php">Les formateurs</a></li>
								<li><span class="glyphicon glyphicon-option-vertical"></span><a href="projets_realises.php">Les projets réalisés</a></li>
								<li><span class="glyphicon glyphicon-option-vertical"></span><a href="depot_projet.php">Proposer un projet</a></li>
							</ul>
						</li>
					</ul>

					<ul class="sitemap-box">
						<li>Annuaire
							<ul>
								<li><span class="glyphicon glyphicon-option-vertical"></span><a href="#">Alumni mapping</a></li>
								<li><span class="glyphicon glyphicon-option-vertical"></span><a href="annuaire_etudiants.php">Anciens étudiants</a></li>
								<li><span class="glyphicon glyphicon-option-vertical"></span><a href="#">Entreprises</a></li>
							</ul>						
						</li>
					</ul>

					<ul class="sitemap-box">
						<li>Offres d'emploi
							<ul>
								<li><span class="glyphicon glyphicon-option-vertical"></span><a href="offres.php">Voir les offres</a></li>
								<li><span class="glyphicon glyphicon-option-vertical"></span><a href="depot_offre.php">Déposer une offre</a></li>
							</ul>						
						</li>
					</ul>

					<ul class="sitemap-box">
						<ul>
							<li><a href="news.php">Actualités</a></li>
							<li><a href="#">Agenda</a></li>
							<li><a href="#">Boîte à outils</a></li>
							<li><a href="forum_accueil.php">Forum</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>

					
									
				</div><!-- #sitemap -->

				<div id="socialmedia">				
						<h1>Réseaux sociaux</h1>
						<a id="linkedin" href="#" title="Retrouvez WebForce3 sur Linkedin !">Linkedin</a>
						<a id="facebook" href="http://fr-fr.facebook.com/webforce3" title="Retrouvez WebForce3 sur Facebook">Facebook</a>
						<a id="twitter" href="http://twitter.com/_webforce3" title="Retrouvez WebForce3 sur Twitter">Twitter</a>
						<a id="youtube" href="#" title="Retrouvez WebForce3 sur Youtube">Youtube</a>	
				</div><!-- #socialmedia -->

			</div><!-- #footer-links -->

			<div id="cnil" class="container">
				<a href="#">Mentions légales</a>
				<a href="#">Conditions d'utilisation</a>
				<a href="#">F.A.Q.</a>
			</div>
		</footer>
		

		<script src="js/jquery.js"></script>
		<script src="js/jquery-ui_tabs.js"></script>
		<script src="js/app.js"></script>
		<script src="js/ing_app.js"></script>
		<script src="http://maps.googleapis.com/maps/api/js?libraries=places"></script>
		<a id="scrolltotop" href="#"><span class="glyphicon glyphicon-menu-up"></span></a>
	</body>
</html>