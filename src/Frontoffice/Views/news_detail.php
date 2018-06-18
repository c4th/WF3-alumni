
	<main id="main" class="container">
		<div id="content">
				
				<!-- VOTRE CONTENU A PARTIR D'ICI -->

	<ol class="breadcrumb">
	  <li><a href="index.php">Accueil</a></li>
	  <li class="active"><a href="news.php">Actualités</a></li>
	</ol>
	
	<p class="titre"><?php echo $parameters['news_detail']['news_titre'] ?></p>

	<div id="news_detail" class="clearfix">
		
		<!--********COLONNE DE GAUCHE********-->
		<div id="colonne_gauche_news" class="clearfix">
			
			<!--Infos sur la source-->
			<div id="info_source_news" class="information_source_news"> 
				<h1>&lt;Sources&gt;</h1>
					<p class="titre_info_news">Date</p>
					<p class="info_paragraphe_news"><?php echo $parameters['news_detail']['news_date'] ?></p>
					<p class="titre_info_news">Auteur</p>
					<a class="info_paragraphe_news" href="http://www.lemondeinformatique.fr" target="_blank">www.lemondeinformatique.fr</a>
					<p class="titre_info_news">Categorie</p>
					<p class="info_paragraphe">Emploi&gt; Recrutement</p>
					
			</div>
		</div>
		<!--************CENTRE**********-->
		<div id="colonne_centre_news">
			<div id="description_news_detail_content">
				<!--Back_link-->
				<div id="back_link_news">
					<p id="triangle_left_backlink_news"></p>
					<p id="back_link_offre_p"><a href="news.php">Retour vers toutes les news</a></p>
				</div>
	
			<!--Description de l'offre-->
				<div id="description_news_detail">
					<img src="photos/<?php echo $parameters['news_detail']['news_photo'] ?>"></img>					
					<p id="legende_photo_news"></h2>
					
					<p class="description_paragraphe_news">
						<?php echo $parameters['news_detail']['news_description'] ?>
					</p>
				</div>
			</div>
			<div id="nav_page_news">
				<p id="triangle-left_news"></p>
				<p id="previous_news"><a href="">Voir l'offre précédente</a>
				<p id="next_news"><a href="">Voir l'offre suivante</a></p>
				<p id="triangle-right_news"></p>
			</div>
		</div>
	</div>
	</div>

		