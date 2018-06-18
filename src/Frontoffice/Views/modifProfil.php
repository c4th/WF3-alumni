
		<main id="main" class="container">
			<div id="content">
				
				<!-- VOTRE CONTENU A PARTIR D'ICI -->
		
			<ol class="breadcrumb">
						  <li><a href="index.php">Accueil</a></li>
						  <li ><a href="annuaire_etudiants.php">Annuaires</a></li>
						  <li class="active">Profil</li>
			</ol>

			<div id="contentModifProfil">

				<?php echo $parameters['msg'] ;?>
				
				<h1 class="titre">Modifier votre profil</h1>
				<form id="formProfil" method="post">
				
					<input type="hidden" name="id_etudiant" value="<?php echo $_GET['id_etudiant'] ?>">
					<input type="hidden" name="email" value="<?php echo $parameters['infosEtudiant']['email'] ?>">

					<img src="photos/<?php echo $parameters['infosEtudiant']['photo'] ?>"/>
					<div class="form-group">
				    	<label for="photo">Photo</label>
						<input type="file" name="photo" value="<?php echo $parameters['infosEtudiant']['photo'] ?>">
				  	</div>
				  	<div class="form-group">
				    	<label for="nom">Nom <span>*</span></label>
						<input type="text" class="form-control" placeholder="Ex : Gates" name="nom" value="<?php echo $parameters['infosEtudiant']['nom'] ?>">
				  	</div>
				  	<div class="form-group">
				    	<label for="prenom">Prénom <span>*</span></label>
						<input type="text" class="form-control" placeholder="Ex : Bill" name="prenom" value="<?php echo $parameters['infosEtudiant']['prenom'] ?>">
				  	</div>
					<div class="form-group">
				    	<label for="ville">Ville <span>*</span></label>
						<input type="text" class="form-control" placeholder="Ex : Paris" name="ville" value="<?php echo $parameters['infosEtudiant']['ville'] ?>">
				  	</div>
				  	<div class="form-group">
				    	<label for="poste">Poste actuel <span>*</span></label>
						<input type="text" class="form-control" placeholder="Ex : Etudiant WebForce 3 / Ingénieur chez Google" name="poste" value="<?php echo $parameters['infosEtudiant']['poste'] ?>">
				  	</div>

				  	<div class="form-group">
				  		<label for="statut">Situation <span>*</span></label>
						<select class="form-control" name="statut">
							<option <?php if($parameters['infosEtudiant']['statut']==1){ echo 'selected' ;} ?> value="1">En recherche active</option>
							<option <?php if($parameters['infosEtudiant']['statut']==2){ echo 'selected' ;} ?> value="2">Ouvert aux opportunités</option>
							<option <?php if($parameters['infosEtudiant']['statut']==3){ echo 'selected' ;} ?> value = "3">En simple veille</option>
						</select>
				 	</div>
				 	<div class="form-group">
				 		<label for="bio">Description</label>
				  		<textarea name="presentation" class="form-control" rows="3" placeholder="Décrivez votre parcours, vos envies, vos projets, vos passions... bref, décrivez-vous !"><?php echo $parameters['infosEtudiant']['presentation'] ?></textarea>
				  	</div>
				  	<p>Langages maitrisés</p>
				  	<table id="langagesModif">
				  		<tr> 	
							<td>
							  	HTML
							</td>

							<?php for($i=1; $i<=5;$i++) { ?>
							<td>
							  	<label class="radio-inline">
				  					<input type="radio" name="html" id="HTML<?php echo $i ?>" value="<?php echo $i ?>" <?php if($i == $parameters['infosEtudiant']['html']) { echo 'checked' ;} ?> > <?php echo $i ?>
				  				</label>
							</td>
							
							<?php } ?>
						</tr>
						<tr> 	
							<td>
							  	CSS
							</td>
							
							<?php for($i=1; $i<=5;$i++) { ?>
							<td>
							  	<label class="radio-inline">
				  					<input type="radio" name="css" id="CSS<?php echo $i ?>" value="<?php echo $i ?>" <?php if($i == $parameters['infosEtudiant']['css']) { echo 'checked' ;} ?> > <?php echo $i ?>
				  				</label>
							</td>
							
							<?php } ?>

							
						</tr>
						
						<tr> 	
							<td>
							  	PHP
							</td>

							<?php for($i=1; $i<=5;$i++) { ?>
							<td>
							  	<label class="radio-inline">
				  					<input type="radio" name="php" id="PHP<?php echo $i ?>" value="<?php echo $i ?>" <?php if($i == $parameters['infosEtudiant']['php']) { echo 'checked' ;} ?> > <?php echo $i ?>
				  				</label>
							</td>
							<?php } ?>

						</tr>

						<tr> 	

							<td>
							  	JavaScript
							</td>

							<?php for($i=1; $i<=5;$i++) { ?>
							<td>
							  	<label class="radio-inline">
				  					<input type="radio" name="javascript" id="JS<?php echo $i ?>" value="<?php echo $i ?>" <?php if($i == $parameters['infosEtudiant']['javascript']) { echo 'checked' ;} ?> > <?php echo $i ?>
				  				</label>
							</td>
							<?php } ?>
							

						</tr>

						<tr> 	
							<td>
							  	Linux
							</td>

							<?php for($i=1; $i<=5;$i++) { ?>
							<td>
							  	<label class="radio-inline">
				  					<input type="radio" name="linux" id="linux<?php echo $i ?>" value="<?php echo $i ?>" <?php if($i == $parameters['infosEtudiant']['linux']) { echo 'checked' ;} ?> > <?php echo $i ?>
				  				</label>
							</td>
							<?php } ?>

							</tr>

						<tr> 	

							<td>
							  	SQL
							</td>

							<?php for($i=1; $i<=5;$i++) { ?>
							<td>
							  	<label class="radio-inline">
				  					<input type="radio" name="mysql" id="SQL<?php echo $i ?>" value="<?php echo $i ?>" <?php if($i == $parameters['infosEtudiant']['mysql']) { echo 'checked' ;} ?> > <?php echo $i ?>
				  				</label>
							</td>
							<?php } ?>
							

						</tr>
						<tr id="emplacementLangageSup">

						</tr>
						<tr>
							<td>
								<input type="button" value="Ajouter un langage" id="ajoutLangage">
							</td>
						</tr>
					</table>
					<p>Vos projets</p>
					<div class="form-group projets">
				    	<label for="projetTitre1">Titre projet 1</label>
						<input type="text" class="form-control" placeholder="Ex : mon portfolio" name="desc_projet1">
						<label for="projetUrl1">URL projet 1</label>
						<input type="text" class="form-control" placeholder="Ex : http://www.monportfolio.com" name="url_projet1">
				  	</div>
				  	<div class="form-group projets">
				    	<label for="projetTitre2">Titre projet 2</label>
						<input type="text" class="form-control" placeholder="Ex : mon CV en ligne" name="desc_projet2">
						<label for="projetUrl2">URL projet 2</label>
						<input type="text" class="form-control" placeholder="Ex : http://www.cvenligne.com" name="url_projet2">
				  	</div>
				  	<div class="form-group projets">
				    	<label for="projetTitre3">Titre projet 3</label>
						<input type="text" class="form-control" placeholder="Ex : mon compte Twitter" name="desc_projet3">
						<label for="projetUrl3">URL projet 3</label>
						<input type="text" class="form-control" placeholder="Ex : http://www.twitter.com" name="url_projet3">
				  	</div>
				  	<div class="form-group projets">
				    	<label for="projetTitre4">Titre projet 4</label>
						<input type="text" class="form-control" placeholder="Ex : des photos de mon chien" name="desc_projet4">
						<label for="projetUrl4">URL projet 4</label>
						<input type="text" class="form-control" placeholder="Ex : http://www.monchienmamuse.com" name="url_projet4">
				  	</div>
				  	<input type="button" value="Ajouter un projet">
				  	<button name="modifProfilValidate" type="submit" class="btn btn-default" style="float : right">Modifier le profil</button>
				</form>

			</div>
		</div>