
		<div id="banner_formateurs"></div>
		<main id="main" class="container">
			<div id="content">
				<ol class="breadcrumb">
				  <li><a href="#">Accueil</a></li>
				  <li><a href="#">Annuaires</a></li>
				  <li class="active">Entreprises</li>
				</ol>
				<h1 class="titre">Les entreprises</h1>
				<div class="jumbotron cadron">
				  <div class="row" id="cadre_formateur">
					<?php $longueur = count($parameters['gallery']); for ($i=0; $i <$longueur; $i++) { ?>
					  <div class="col-sm-6 col-md-4">
					    <div class="thumbnail">
					      <img src="photos/<?php $paremeters['gallery'][$i]['entreprise_logo']?>" alt="...">
					      <div class="caption">
					        <h3><?php $paremeters['gallery'][$i]['entreprise_nom']?></h3>
					        <p><?php $paremeters['gallery'][$i]['entreprise_presentation']?></p>
					        <p><a href="" class="btn btn-primary" role="button"><?php $paremeters['gallery'][$i]['entreprise_website']?></a></p>
					      </div>
					    </div>
					  </div>
					<?php } ;?>
					</div>
				</div>
			</div>
<?php include('sidebar.php'); ?>
</main> 