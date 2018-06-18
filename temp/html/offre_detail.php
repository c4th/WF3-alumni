<?php include("header.php"); ?>
	
	<main id="main" class="container">
		<div id="content">
				
				<!-- VOTRE CONTENU A PARTIR D'ICI -->

	<ol class="breadcrumb">
	  <li><a href="index.php">Home</a></li>
	  <li ><a href="#">Annuaire</a></li>
	  <li class="active">Profil</li>
	</ol>
	<p class="titre">Développeur Front-End</p>

	<div id="offre_detail" class="clearfix">
		
		<!--********COLONNE DE GAUCHE********-->
		<div id="colonne_gauche_offre" class="clearfix">
			
			<!--Infos sur l'entreprise-->
			<div id="info_entreprise" class="information_offre"> 
				<h1>&lt;Infos Clés&gt;</h1>
					<p class="titre_info_offre">Entreprise</p>
					<p class="info_paragraphe">360° Degrés Fahrenheit</p>
					<a href="http://www.3cent60.biz/" target="_blank"><img id="logo_entreprise_offre" src="../img/logo_offre1.png"></img></a>
					<p class="titre_info_offre">Secteur d'activité</p>
					<p class="info_paragraphe">Agence de communication</p>
					<p class="titre_info_offre">Coordonnées</p>
					<p class="info_paragraphe">8, rue Brémontier</p>
					<p class="info_paragraphe">75017 Paris</p>
					<p class="titre_info_offre">Contact</p>
					<a id="info_contact_postuler" href="mailto:recrutement@3cent60.net" class="info_paragraphe">recrutement@3cent60.net</a>
					<p id="info_pour_postuler" class="info_paragraphe">Lettre de motivation et CV</p>
			</div>
			
			
			
			<!--Info sur le poste-->
			<div id="info_poste" class="information_offre"> 
				<h1>&lt;Le Poste&gt;</h1>
				<p class="titre_info_offre">Type de Poste</p>
				<p class="info_paragraphe">CDI/CDD/Stage</br>Contrat Pro/Alternance</br>Freelance</p>
				<p class="titre_info_offre">Niveau de poste</p>
				<p class="info_paragraphe">Débutant/Faux Débutant/Expert</p>
				<p class="titre_info_offre">Durée</p>
				<p class="info_paragraphe">à partir de 6mois, 1 ou 2 années souhaité</p>
				<p class="titre_info_offre">Prise de fonction</p>
				<p class="info_paragraphe">le + tôt possible entre Juillet et Septembre</p>
				<!--Competences + glyphicon stars-->
				<div id="comptence_technique_offre">
					<p class="titre_info_offre">Competence</p>
					<div id="star_competence_offre" class="star_competence_offre">
						<p class="info_paragraphe star">HTML</p>
						<p class="glyphicon glyphicon-star">
						<p class="glyphicon glyphicon-star">
						<p class="glyphicon glyphicon-star">
						<p class="glyphicon glyphicon-star">
						<p class="glyphicon glyphicon-star-empty">
					</div>
					<div class="star_competence_offre clearfix">
						<p class="info_paragraphe star">CSS</p>
						<p class="glyphicon glyphicon-star">
						<p class="glyphicon glyphicon-star">
						<p class="glyphicon glyphicon-star">
						<p class="glyphicon glyphicon-star">
						<p class="glyphicon glyphicon-star-empty">
					</div>
					<div class="star_competence_offre clearfix">
						<p class="info_paragraphe star">Javascript</p>
						<p class="glyphicon glyphicon-star">
						<p class="glyphicon glyphicon-star">
						<p class="glyphicon glyphicon-star-empty">
						<p class="glyphicon glyphicon-star-empty">
						<p class="glyphicon glyphicon-star-empty">
					</div>
					<div class="star_competence_offre clearfix">
						<p class="info_paragraphe star">PHP</p>
						<p class="glyphicon glyphicon-star">
						<p class="glyphicon glyphicon-star">
						<p class="glyphicon glyphicon-star">
						<p class="glyphicon glyphicon-star-empty">
						<p class="glyphicon glyphicon-star-empty">
					</div>
					<div class="star_competence_offre clearfix">
						<p class="info_paragraphe star">SQL</p>
						<p class="glyphicon glyphicon-star">
						<p class="glyphicon glyphicon-star">
						<p class="glyphicon glyphicon-star">
						<p class="glyphicon glyphicon-star-empty">
						<p class="glyphicon glyphicon-star-empty">
					</div>
					<div class="star_competence_offre clearfix">
						<p class="info_paragraphe star">Linux</p>
						<p class="glyphicon glyphicon-star">
						<p class="glyphicon glyphicon-star">
						<p class="glyphicon glyphicon-star-empty">
						<p class="glyphicon glyphicon-star-empty">
						<p class="glyphicon glyphicon-star-empty">
					</div>
				</div>
			</div>
			<!--Google Map-->
			<div id="google_map_offre">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2625.2106918459153!2d2.3574344000000003!3d48.854192600000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671fd10fa77a9%3A0xbefa2358f9e7a776!2s18+Rue+Geoffroy+l'Asnier%2C+75004+Paris!5e0!3m2!1sfr!2sfr!4v1426760436457" width="280" height="205" frameborder="0" style="border:0"></iframe>
			
				<!--a href="http://www.3cent60.biz/" target="_blank"><img src="../img/map_static.png"></img></a-->
			</div>
			
			
		</div>
		<!--************CENTRE**********-->
		<div id="colonne_centre_offre">
			<div id="description_offre">
				<!--Back_link-->
				<div id="back_link_offre">
					<p id="triangle_left_backlink"></p>
					<p id="back_link_offre_p"><a href="">Retour vers toutes les offres</a></p>
				</div>
				<!--Bouton Postuler-->
				<div id="postuler_offre">
					<a href="" ><!--href="mailto:recrutement@3cent60.net"-->POSTULER</a>
				</div>
				<!--coeur + Favoris-->
				<div id="offre_favoris" >										
						<p id="texte"><a class="favoris" href="">Marquer cette offre</a></p>								
						<a class="favoris" href=""><p id="heart_offre"></p></a>
						<!--a class="favoris" href=""><p id="heart" class="glyphicon glyphicon-heart"></p></a-->
				</div>
				<!--Description de l'offre-->
				<div id="description_offre_detail">
					<h2>L'environnement</h2>
					<p class="description_paragraphe">
						360 Degrés fahrenheit est l'entité purement digitale du groupe Ibiza, une agence de communication de 40
						personnes basée à Paris 17. l'équipe de 360° intervient dans ses secteurs de prédilection depuis plus de
						15 ans et s'efforce d'être astucieuse, efficace et rapide en développant un large panel d'activités : 
						Webdesign, AOD, landing, emailing, plateforme relationnelle, dispositif e-marketing...<br>
						Le marketing digital est notre métier, l'open source et le mode Saas nos convictions. Et en, plus, chez nous
						c'est vraiment vrai 
					</p>
					<h2>Votre rôle</h2>
						<p class="description_paragraphe">Au sein de notre équipe, vos principales missions seront:
						<ul class="description_paragraphe">
							<li>Réceptionner les briefs client et participer à l'élaboration des recommandations</li>
							<li>Designer des maquettes adaptées aux objectifs du client</li>
							<li>Intégrer les maquettes (Intégration HTML Responsive)</li>
							<li>Gérer les allers/retours de validation jusqu'à la mise en ligne</li>
							<li>Vous saurez faire preuve de dynamisme, de professionnalisme et de réactivité</li>
						</ul>
						</p>
					<h2>Votre profil</h2>
						<p class="description_paragraphe">
							360° recherche un(e) étudiant(e) en formation d'intégrateur, de développeur ou de graphiste multimédia,
							de niveau Bac+3 et commençant une formation Bac+4/5. Les qualités et compétences requises pour ces
							missions sont :
							<ul class="description_paragraphe">
								<li>La maîtrise des outils informatiques Photoshop, du Pack Office et de l'inétgration d'emailing en HTML Responsive</li>
								<li>Etre autonome, rigoureux, organisé et force de proposition</li>
								<li>Des premières expériences d'intégration constitueront un véritable plus à votre candidature</li>
								<li>De bonnes compétences relationnelles (synthèse, orthographe, syntaxe) seront appréciées</li>
							</ul>
						</p>
					<h2>L'équipe</h2>
						<p class="description_paragraphe">
							Notre équipe est agréable et solidaire. Vos attitudes et comportements personnels seront clés : 
							engagement, esprit d'équipe, humilité, curiosité, sens de l'humour...
						</p>
				</div>
			</div>
			<div id="nav_page">
				<p id="triangle-left"></p>
				<p id="previous"><a href="">Voir l'offre précédente</a>
				<p id="next"><a href="">Voir l'offre suivante</a></p>
				<p id="triangle-right"></p>
			</div>
		</div>
	</div>
		
<?php include("sidebar.php"); ?>		

<?php include("footer.php"); ?>

		