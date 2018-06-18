
		<main id="main" class="container">
			<div id="content" class="content_alumni">
				
				<ol class="breadcrumb">
				  <li><a href="http://wf3.veyatif.com/">Accueil</a></li>
				  <li><a href="#">Annuaires</a></li>
				  <li class="active">Anciens étudiants</li>
				</ol>
				<h1 class="titre">Annuaire des Alumni</h1>

				<nav class="navbar navbar-default" id="">
				  <div class="container-fluid">
				  	<!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <p class="navbar-brand">Affiner votre recherche</p>
				    </div>
				    <form>
					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					     	<select class="selection">Par situation géographique <span class="caret"></span>
								<option>Île de France</option>
							    <option>PACA</option>
							    <option>Midi-Pyrénées</option>
							</select>
					        <select class="selection">Par compétence métier <span class="caret"></span>
								<option>HTML / CSS</option>
							    <option selected>POO</option>
							    <option>JQuery</option>
							    <option>MySQL</option>
					        </select>
					        <select class="selection">Par session <span class="caret"></span>
								<option selected>EKLUZ - Février à Juin 2015</option>
							    <option></option>
							    <option></option>
							    <option></option>
					        </select>
					    </div><!-- /.navbar-collapse -->
				     </form>
				  </div><!-- /.container-fluid -->
				</nav>
				<div id="display_profil">
					<?php $longueur = count($parameters['gallery']); for ($i=0; $i <$longueur; $i++) {; ?>
					  <div class="col-md-4 alumni_vignette">
					  	<a href="etudiant.php?id_etudiant=<?php echo $parameters['gallery'][$i]['id_etudiant'];?>">
					  		<img src="photos/<?php echo $parameters['gallery'][$i]['photo'] ;?>" alt="..." class="img-thumbnail img-responsive"></a>
					  	<a href="etudiant.php?id_etudiant=<?php echo $parameters['gallery'][$i]['id_etudiant'];?>">
					  		<h3 class="vignette"><?php echo $parameters['gallery'][$i]['prenom'].' '.$parameters['gallery'][$i]['nom'] ;?></h3>
					  	</a>
					  	<h4 class="vignette"><?php echo $parameters['gallery'][$i]['poste'];?></h4>
					  	<p><span>Statut : </span><?php if($parameters['gallery'][$i]['statut'] == 1) {echo 'en recherche active';}
						elseif($parameters['gallery'][$i]['statut'] == 2) {echo 'ouvert aux opportunités';}
						else {echo 'en simple veille';} ?></p>
					  	<div><p class="alumni_fav"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Ajouter ce profil à ma liste</p></div>  	
					  </div>
					<?php } ?>
					  
				</div>
				<!-- <div class="divider"><a>Voir plus de profils</a></div> -->




			</div>