<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>WebForce3 Alumni - Le site des anciens étudiants de l'école WebForce3</title>
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="../css/base.css">
		<link rel="stylesheet" href="../css/base_thierry.css">
		<link rel="stylesheet" href="../css/base_ingrid.css">
		<link rel="stylesheet" href="../css/inscription.css">
		<link rel="stylesheet" href="../css/offre.css">
		<link rel="stylesheet" href="../css/page-contact.css">

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
								<li><a href="annuaire_formateurs.php">Les formateurs</a></li>
								<li><a href="projets_realises.php">Les projets réalisés</a></li>
								<li><a href="depot_projet.php">Proposer un projet</a></li>
							</ul>						
						</li>
					
						<li><a href="news.php">Actualités</a></li>
						
						<li><a href="#">Agenda</a></li>
						<li><a href="#">Annuaires</a>			
							<ul class="subnav">
								<li><a href="alumni_mapping.php">Alumni mapping</a></li>
								<li><a href="annuaire_etudiants.php">Anciens étudiants</a></li>
								<li><a href="annuaire_entreprises.php">Entreprises</a></li>
							</ul>
						</li>	
						<li><a href="#">Offres d'emploi</a>			
							<ul class="subnav">
								<li><a href="voir_offre.php">Voir les offres</a></li>
								<li><a href="depot_offre.php">Déposer une offre</a></li>
							</ul>

						</li>
						<li><a href="boite_a_outils.php">Boite à outils</a></li>
						<li><a href="forum.php">Forum</a></li>
						<li><a href="contact.php">Contact</a></li>
						
					</ul><!-- .nav -->
				</nav><!-- #nav-bar -->
			</div><!-- .container -->
		</header>
		<div id="banner_formateurs"></div>
		<main id="main" class="container">
			<div id="content">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li><a href="#">Annuaires</a></li>
				  <li class="active">Formateurs</li>
				</ol>
				<h1 class="titre">Les formateurs</h1>
				<div class="jumbotron cadron">
				  <div class="row" id="cadre_formateur">
					  <div class="col-sm-6 col-md-4">
					    <div class="thumbnail">
					      <img src="../img/maxime_vasse.jpg" alt="...">
					      <div class="caption">
					        <h3>Maxime VASSE</h3>
					        <p>...</p>
					        <p><a href="" class="btn btn-primary" role="button">Formateur frontend</a></p>
					      </div>
					    </div>
					  </div>
					  <div class="col-sm-6 col-md-4">
					    <div class="thumbnail">
					      <img src="../img/ziad_jaagoub.jpg" alt="...">
					      <div class="caption">
					        <h3>Ziad JAAGOUB</h3>
					        <p>...</p>
					        <p><a href="#" class="btn btn-primary" role="button">Formateur backend</a></p>
					      </div>
					    </div>
					  </div>
					  <div class="col-sm-6 col-md-4">
					    <div class="thumbnail">
					      <img src="../img/denis_nerborac.jpg" alt="...">
					      <div class="caption">
					        <h3>Denis NERBORAC</h3>
					        <p>...</p>
					        <p><a href="#" class="btn btn-primary" role="button">Formateur backend</a></p>
					      </div>
					    </div>
					  </div>
					  <div class="col-sm-6 col-md-4">
					    <div class="thumbnail">
					      <img src="../img/dario_spagnolo.jpg" alt="...">
					      <div class="caption">
					        <h3>Dario SPAGNOLO</h3>
					        <p>...</p>
					        <p><a href="#" class="btn btn-primary" role="button">Responsable pédagogique</a></p>
					      </div>
					    </div>
					  </div>
					  <div class="col-sm-6 col-md-4">
					    <div class="thumbnail">
					      <img src="../img/delphine_malassingne.jpg" alt="...">
					      <div class="caption">
					        <h3>Delphine MALASSINGNE</h3>
					        <p>...</p>
					        <p><a href="#" class="btn btn-primary" role="button">Formatrice qualité web</a></p>
					      </div>
					    </div>
					  </div>
					  <div class="col-sm-6 col-md-4">
					    <div class="thumbnail">
					      <img src="../img/guillaume-sylvestre.jpg" alt="...">
					      <div class="caption">
					        <h3>Guillaume SYLVESTRE</h3>
					        <p>...</p>
					        <p><a href="#" class="btn btn-primary" role="button">Formateur backend</a></p>
					      </div>
					    </div>
					  </div>
					</div>
				</div>
			</div>
<?php include("sidebar.php"); ?>
		</main>


<?php include("footer.php"); ?>