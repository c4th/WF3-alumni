<?php
// echo '<pre>';
// print_r($parameters['gallery']);
// echo '<hr>';
// print_r($parameters['infos_entreprise']);
// echo '</pre>';
function cutString($text, $max_length, $end = '... ') {
	if (strlen($text) <= $max_length) {
		return $text;
	}
	$text = wordwrap($text, $max_length, '|');
	$text = explode('|', $text);
	return $text[0].$end;
}

?>
		<div id="banner_offre"></div>
		<main id="main" class="container">
			<div id="content">
				
				<!-- VOTRE CONTENU A PARTIR D'ICI -->
				<ol class="breadcrumb">
				  <li><a href="http://wf3.veyatif.com">Accueil</a></li>
				  <li><a href="#">Offres d'emploi</a></li>
				  <li class="active">Voir les offres</li>
				</ol>
				<h1 class="titre">Les offres</h1>
				<div id="grid_offers_form">
					<form >
						<select name="select_type_offre" id="" value="" class="grid_offers_search">
							<option>CDI</option>
							<option>CDD</option>
							<option>Stage</option>
							<option>Freelance</option>
						</select>
						<select name="select_ville" id="" value="" class="grid_offers_search">
							<option>Paris</option>
							<option>Marseille</option>
							<option>Bordeaux</option>
							<option>Toulouse</option>
						</select>
					</form>
				</div>
				<?php $longueur = count($parameters['gallery']); for ($i=0; $i <$longueur; $i++) { ?>
				<div class="grid_offre clearfix">
					<a href="offre_detail.php?id_offre=<?php echo $parameters['gallery'][$i]['id_offre_emploi'];?>"><h3><span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span><?php echo $parameters['gallery'][$i]['offre_titre'];?><span class="label label-warning">New</span></h3></a>
					<div class="entete">
						<p><span>Date de publication</span><?php echo date('d/m/Y ', strtotime($parameters['gallery'][$i]['offre_date']));?></p>
						<p><span>Type de contrat:</span><?php echo $parameters['gallery'][$i]['offre_type'];?></p>
						<p><span>Lieu:</span><?php echo $parameters['gallery'][$i]['offre_lieu'];?></p>
					</div><?php if(($parameters['gallery'][$i]['id_offre_emploi']) == ($parameters['infos_entreprise'][$i]['id_offre_emploi'])) { ?>
						<img src="photos/<?php echo $parameters['infos_entreprise'][$i]['entreprise_logo'];?>" class="clearfix" width:"300" height="90">
					<?php } ;?>
					<div class="grid_description">
						<p><?php echo cutString($parameters['gallery'][$i]['offre_role'], 250);?></p>
						<div class="tag"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span></div>
					</div>
					<div class="grid_border"></div>
				</div>
				<?php } ;?>
			</div>

	</div><!-- #content -->