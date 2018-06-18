<main id="main" class="container">
	<div id="content">
				
	<!-- VOTRE CONTENU A PARTIR D'ICI -->

	<ol class="breadcrumb">
	  <li><a href="index.php">Accueil</a></li>
	  <li ><a href="#">Annuaire</a></li>
	  <li class="active">Profil</li>
	</ol>
	<p class="titre"><?php echo $parameters['offre_detail']['offre_titre']?></p>

	<div id="offre_detail" class="clearfix">
		
		<!--********COLONNE DE GAUCHE********-->
		<div id="colonne_gauche_offre" class="clearfix">
			
			<!--Infos sur l'entreprise-->
			<div id="info_entreprise" class="information_offre"> 
				<h1>&lt;Infos Clés&gt;</h1>
					<p class="titre_info_offre">Entreprise</p>
					<p class="info_paragraphe"><?php echo $parameters['entreprise_detail']['entreprise_nom']?></p>
					<p><a id="adresse_du_site" href="http://<?php echo $parameters['entreprise_detail']['entreprise_website']?>" target="_blank" ><?php echo $parameters['entreprise_detail']['entreprise_website']?></a>
					<img id="logo_entreprise_offre" src="photos/<?php echo $parameters['entreprise_detail']['entreprise_logo']?>"></img>
					<p class="titre_info_offre">Secteur d'activité</p>
					<p class="info_paragraphe"><?php echo $parameters['entreprise_detail']['entreprise_activite']?></p>
					<p class="titre_info_offre">Coordonnées</p>
					<p class="info_paragraphe"><?php echo $parameters['entreprise_detail']['entreprise_adresse']?></p>
					<p class="info_paragraphe"><?php echo $parameters['entreprise_detail']['entreprise_cp']?>  <?php echo $parameters['entreprise_detail']['entreprise_ville']?></p>
					<p class="titre_info_offre">Contact</p>
					<p class="info_paragraphe"><?php echo $parameters['offre_detail']['offre_nom_contact']?></p>
					<a id="info_contact_postuler" href="mailto:recrutement@3cent60.net" class="info_paragraphe"><?php echo $parameters['offre_detail']['offre_mail']?></a>
					<p class="info_paragraphe">Tél : <?php echo $parameters['offre_detail']['offre_telephone']?><p>
					<p id="info_pour_postuler" class="info_paragraphe">Lettre de motivation et CV</p>
			</div>
			
			
			
			<!--Info sur le poste-->
			<div id="info_poste" class="information_offre"> 
				<h1>&lt;Le Poste&gt;</h1>
				<p class="titre_info_offre">Type de Poste</p>
				<p class="info_paragraphe"><?php echo $parameters['offre_detail']['offre_type']?></p>
				<p class="titre_info_offre">Niveau de poste</p>
				<p class="info_paragraphe"><?php echo $parameters['offre_detail']['offre_niveau']?></p>
				<p class="titre_info_offre">Lieu</p>
				<p class="info_paragraphe"><?php echo $parameters['offre_detail']['offre_lieu']?></p>
				<p class="titre_info_offre">Durée</p>
				<p class="info_paragraphe"><?php echo $parameters['offre_detail']['offre_duree']?></p>
				<p class="titre_info_offre">Prise de fonction</p>
				<p class="info_paragraphe"><?php echo $parameters['offre_detail']['offre_prise_fonction']?></p>
				<p class="titre_info_offre">Rémunération</p>
				<p class="info_paragraphe">&lt; 24 000 €<!--?php echo $parameters['offre_detail']['offre_salaire']?--></p>
				<div id="comptence_technique_offre">
					<p class="titre_info_offre">Competence</p>
					<p class="info_paragraphe star">HTML</p>
					<p class="info_paragraphe star">CSS</p>
					<p class="info_paragraphe star">Javascript</p>
					<p class="info_paragraphe star">PHP</p>
					<p class="info_paragraphe star">SQL</p>
					<p class="info_paragraphe star">Linux</p>
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
					<p id="back_link_offre_p"><a href="offres.php">Retour vers toutes les offres</a></p>
					<p id="reference_offre_detail"><?php echo $parameters['offre_detail']['offre_reference']?></p>
					<p id="date_offre_detail">publiée le : <?php echo date('d/m/Y ', strtotime($parameters['offre_detail']['offre_date']))?></p>
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
					<h2>L'entreprise</h2>
					<p class="description_paragraphe">
						<?php echo $parameters['entreprise_detail']['entreprise_presentation']?> 
					</p>
					<h2>L'environnement</h2>
					<p class="description_paragraphe">
						<?php echo $parameters['offre_detail']['offre_environnement']?> 
					</p>
					<h2>Votre rôle</h2>
						<p class="description_paragraphe"><?php echo $parameters['offre_detail']['offre_role']?></p>
					<h2>Votre profil</h2>
						<p class="description_paragraphe">
							<?php echo $parameters['offre_detail']['offre_profil']?></p>
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
</div> 
		