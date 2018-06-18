		<main id="main" class="container">
			<div id="content">
				
				<!-- VOTRE CONTENU A PARTIR D'ICI -->
				<ol class="breadcrumb">
				  <li><a href="#">Accueil</a></li>
				  <li class="active">Actualités</li>
				</ol>
				<h1 class="titre">Actualités</h1>

				<h2 id="sous_titre_news">Sous-titre de la page : des news , des offres et plus encore !</h2>
				
				<?php foreach ($parameters['allNews'] as $oneNews) { ?>

				<div class="media">
				  <div class="media-left media-middle">
				    <a href="#">
				      <img class="media-object" src="img/photok.jpg" alt=""  width="210" height="140">
				    </a>
				  </div>
				  <div class="media-body">
				    <h3 class="media-heading"><?php echo $oneNews['news_titre'] ?></h3>
				    <span><?php echo $oneNews['news_date'] ?></span>
					<p><?php echo $oneNews['news_description'] ?></p>
				  </div>
				</div>
				<?php } ?>

				<button type="button" class="btn btn-primary btn-lg btn-block">Voir plus de News</button>
				<div class="btn-group btn-group-justified" role="group" aria-label="..."></div>
			</div>