		<main id="main" class="container">
			<div id="content">
				

				<ol class="breadcrumb">
					<li><a href="index.php">Accueil</a></li>
					<li ><a href="annuaire_etudiants.php">Annuaires</a></li>
					<li class="active">Profil</li>
				</ol>
				<!-- VOTRE CONTENU A PARTIR D'ICI -->
				<div id="contentProfil">
					<div id="supGauche">
						<img src="<?php echo 'photos/'. $parameters['infosEtudiant']['photo'] ?>" />
						<!-- <div><span class="glyphicon glyphicon-briefcase"></span>Codeur TNT</div>-->
						<div>
							<span class="glyphicon glyphicon-map-marker"></span> <?php echo $parameters['infosEtudiant']['ville'] ?>
						</div>
						<div><span class="glyphicon glyphicon-question-sign" style="color : <?php if($parameters['infosEtudiant']['statut'] == 1) {echo 'green'.'"></span>En recherche active';}
						elseif($parameters['infosEtudiant']['statut'] == 2) {echo 'yellow'.'"></span>Ouvert aux opportunités';}
						else {echo 'red'.'"></span>En simple veille';} ?>

						</div>
						<div><a><span class="glyphicon glyphicon-envelope"></span>Contacter <?php echo $parameters['infosEtudiant']['prenom'] ?></a>
						</div>
						<div><a><span class="glyphicon glyphicon-heart" style="color : #0db896"></span>Ajouter aux favoris</a>
						</div>
					</div>

					<div id="supDroit">
						<div id="nom">
							 <?php  if (!empty($_SESSION)){

							 if ($_GET['id_etudiant'] == $_SESSION['user']['id_etudiant']){

								echo '<a href="modifProfil.php?id_etudiant='.$_GET['id_etudiant'].'"><button id="boutonModifProfil">Modifier<span class="glyphicon glyphicon-pencil"></span></button></a>';} }

							?>
							<h1><?php echo $parameters['infosEtudiant']['prenom']. ' ' .$parameters['infosEtudiant']['nom']?></h1>

							<h2><?php echo $parameters['infosEtudiant']['poste'] ?></h2>
						</div>
						<article><?php echo $parameters['infosEtudiant']['presentation'] ?></article>
					</div>
					<div id="langages" class="clearfix">
						<h3>Compétences techniques</h3>
						<table>
							<tr>
								<td>HTML</td>
								<td>
									<?php for($i = 1; $i <= $parameters['infosEtudiant']['html']; $i++) { ?>
										<span class="glyphicon glyphicon-star"></span>
									<?php } ?>
									<?php for($i = 1; $i <= 5 - $parameters['infosEtudiant']['html']; $i++) { ?>
										<span class="glyphicon glyphicon-star-empty"></span>
									<?php } ?>
								</td>
								<td>CSS</td>
								<td>
								<?php for($i = 1; $i <= $parameters['infosEtudiant']['css']; $i++) { ?>
									<span class="glyphicon glyphicon-star"></span>
								<?php } ?>
								<?php for($i = 1; $i <= 5 - $parameters['infosEtudiant']['css']; $i++) { ?>
									<span class="glyphicon glyphicon-star-empty"></span>
								<?php } ?>
								</td>
							</tr>

							<tr>
								<td>PHP</td>
								<td>	
									<?php for($i = 1; $i <= $parameters['infosEtudiant']['php']; $i++) { ?>
										<span class="glyphicon glyphicon-star"></span>
									<?php } ?>
									<?php for($i = 1; $i <= 5 - $parameters['infosEtudiant']['php']; $i++) { ?>
										<span class="glyphicon glyphicon-star-empty"></span>
									<?php } ?>
								</td>

								<td>Javascript</td>
								<td>	
									<?php for($i = 1; $i <= $parameters['infosEtudiant']['javascript']; $i++) { ?>
										<span class="glyphicon glyphicon-star"></span>
									<?php } ?>
									<?php for($i = 1; $i <= 5 - $parameters['infosEtudiant']['javascript']; $i++) { ?>
										<span class="glyphicon glyphicon-star-empty"></span>
									<?php } ?>
								</td>

							</tr>
						
							<tr>
								<td>Linux</td>
								<td>
									<?php for($i = 1; $i <= $parameters['infosEtudiant']['linux']; $i++) { ?>
										<span class="glyphicon glyphicon-star"></span>
									<?php } ?>
									<?php for($i = 1; $i <= 5 - $parameters['infosEtudiant']['linux']; $i++) { ?>
										<span class="glyphicon glyphicon-star-empty"></span>
									<?php } ?>
								</td>
							
								<td>SQL</td>
								<td>
									<?php for($i = 1; $i <= $parameters['infosEtudiant']['mysql']; $i++) { ?>
										<span class="glyphicon glyphicon-star"></span>
									<?php } ?>
									<?php for($i = 1; $i <= 5 - $parameters['infosEtudiant']['mysql']; $i++) { ?>
										<span class="glyphicon glyphicon-star-empty"></span>
									<?php } ?>
								</td>
							</tr>
						</table>
					</div>
				
					<hr>
					<div id="projets">
						<h3>Mes projets</h3>
						<hr>
						<ul>
								<li><img src="img/001.jpg"/></li>
								<li><a href="<?php echo $parameters['infosEtudiant']['url_projet1'] ?>"><?php echo $parameters['infosEtudiant']['desc_projet1'] ?></a></li>
						</ul>				
						<ul>
							<li><img src="img/002.jpg"/></li>
							<li><a href="<?php echo $parameters['infosEtudiant']['url_projet2'] ?>"><?php echo $parameters['infosEtudiant']['desc_projet2'] ?></a></li>
						</ul>
						<ul>
							<li><img src="img/003.jpg"/></li>
							<li><a href="<?php echo $parameters['infosEtudiant']['url_projet3']?>"><?php echo $parameters['infosEtudiant']['desc_projet3'] ?></a></li>
						</ul>
						<ul>
							<li><img src="img/comingsoon.jpg"/></li>
							<li><?php echo $parameters['infosEtudiant']['desc_projet4'] ?></li>
						</ul>
					</div>
				</div>
			</div>
