<?php include("header.php"); ?>

		<main id="main" class="container">
			<div id="content">
				

			<ol class="breadcrumb">
						  <li><a href="index.php">Home</a></li>
						  <li ><a href="annuaire_etudiants.php">Annuaire</a></li>
						  <li class="active">Profil</li>
			</ol>
				<!-- VOTRE CONTENU A PARTIR D'ICI -->
			<div id="contentProfil">
				<div id="supGauche">
					<img src="../img/photo_profil.jpeg" />
					<!-- <div><span class="glyphicon glyphicon-briefcase"></span>Codeur TNT</div>-->
					<div>
						<span class="glyphicon glyphicon-map-marker"></span> PARIS, France
					</div>
					<div><span class="glyphicon glyphicon-question-sign" style="color : green"></span>En recherche active
					</div>
					<div><a><span class="glyphicon glyphicon-envelope"></span>Contacter Ziad</a>
					</div>
					<div><a><span class="glyphicon glyphicon-heart" style="color : #0db896"></span>Ajouter aux favoris</a>
					</div>
				</div>

				<div id="supDroit">
					<div id="nom">
						<h1>Ziad JAAGOUB</h1>
						<h2>Codeur TNT</h2>
					</div>
					<article>Bonjour je m'appelle Ziad Jaagoub et je suis codeur TNT : je code ce que décodent les décodeurs TNT. Embauchez-moi je suis performant, rapide et je fais le café. Mon code c'est de la dynamite ! #drole
					Mauris at nunc nec leo aliquet tincidunt ut in justo. Aenean placerat purus eget fermentum semper. Quisque mollis laoreet justo non feugiat. Etiam vitae sapien ex. Vestibulum eu lacus non augue sodales ornare. Donec vulputate diam efficitur bibendum aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</article>
				</div>
				<div id="langages" class="clearfix">
					<h3>Compétences techniques</h3>
					<table>
						<tr>
							<td>HTML</td>
							<td><span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star-empty"></span>
							</td>
							<td>CSS</td>
							<td><span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star-empty"></span>
							</td>
						</tr>

						<tr>
							<td>PHP</td>
							<td><span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							</td>

							<td>Javascript</td>
							<td><span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star-empty"></span>
							<span class="glyphicon glyphicon-star-empty"></span>
							</td>

						</tr>
					
						<tr>
							<td>Linux</td>
							<td><span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star-empty"></span>
							<span class="glyphicon glyphicon-star-empty"></span>
							<span class="glyphicon glyphicon-star-empty"></span>
							</td>
						
							<td>SQL</td>
							<td><span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							</td>
						</tr>
					</table>
				</div>
				<!-- <hr> -->
				<div id="projets">
					<h3>Mes projets</h3>
					<hr>
					<ul>
						<li><img src="../img/001.jpg"/></li>
						<li><a>Mon site perso</a></li>
					</ul>
					<ul>
						<li><img src="../img/002.jpg"/></li>
						<li><a>Un projet sur lequel j'ai bossé</a></li>
					</ul>
					<ul>
						<li><img src="../img/003.jpg"/></li>
						<li><a>Mon compte Twitter</a></li>
					</ul>
					<ul>
						<li><img src="../img/comingsoon.jpg"/></li>
						<li>Prochainement</li>
					</ul>
				</div>
			</div>
<?php include("sidebar.php"); ?>		

<?php include("footer.php"); ?>