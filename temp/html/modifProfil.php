<?php include("header.php"); ?>

		<main id="main" class="container">
			<div id="content">
				
				<!-- VOTRE CONTENU A PARTIR D'ICI -->
		
			<ol class="breadcrumb">
						  <li><a href="index.php">Home</a></li>
						  <li ><a href="annuaire_etudiants.php">Annuaire</a></li>
						  <li class="active">Profil</li>
			</ol>

			<div id="contentModifProfil">
				<h1 class="titre">Modifier votre profil</h1>

				<form id="formProfil" method="post" >
					<img src="../img/photo_profil.jpeg" />
					<div class="form-group">
				    	<label for="photo">Photo</label>
						<input type="file" name="photo">
				  	</div>
				  	<div class="form-group">
				    	<label for="nom">Nom</label>
						<input type="text" class="form-control" placeholder="Ex : Gates" name="Nom">
				  	</div>
				  	<div class="form-group">
				    	<label for="prenom">Prénom</label>
						<input type="text" class="form-control" placeholder="Ex : Bill" name="prenom">
				  	</div>
				  	<div class="form-group">
						<label for="email">Email</label>
						<input type="text" class="form-control" placeholder="steve.jobs@msn.com" name="email">	
				 	</div>
					<div class="form-group">
				    	<label for="ville">Ville</label>
						<input type="text" class="form-control" placeholder="Ex : Paris" name="ville">
				  	</div>
				  	<div class="form-group">
				    	<label for="poste">Poste actuel</label>
						<input type="text" class="form-control" placeholder="Ex : Etudiant WebForce 3 / Ingénieur chez Google" name="poste">
				  	</div>

				  	<div class="form-group">
				  		<label for="statut">Situation</label>
						<select class="form-control" name="statut">
							<option>En recherche active</option>
							<option>Ouvert aux opportunités</option>
							<option>En simple veille</option>
						</select>
				 	</div>
				 	<div class="form-group">
				 		<label for="bio">Description</label>
				  		<textarea name="bio"class="form-control" rows="3" placeholder="Décrivez votre parcours, vos envies, vos projets, vos passions... bref, décrivez-vous !"></textarea>
				  	</div>
				  	<p>Langages maitrisés</p>
				  	<table id="langagesModif">
				  		<tr> 	
							<td>
							  	HTML
							</td>
							<td>
							  	<label class="radio-inline">
				  					<input type="radio" name="htmlOptions" id="HTML1" value="1"> 1
				  				</label>
							</td>
							<td>
				  				<label class="radio-inline">
				  					<input type="radio" name="htmlOptions" id="HTML2" value="2"> 2
				  				</label>
							</td>
							<td>
				  				<label class="radio-inline">
				  					<input type="radio" name="htmlOptions" id="HTML3" value="3"> 3
				  				</label>
							</td>
							<td>
				  				<label class="radio-inline">
				  					<input type="radio" name="htmlOptions" id="HTML4" value="4"> 4
				  				</label>
				  			</td>
				  			<td>
				  				<label class="radio-inline">
				  					<input type="radio" name="htmlOptions" id="HTML5" value="5"> 5
								</label>
							</td>
						</tr>

						<tr> 	
							<td>
							  	CSS
							</td>
							<td>
							  	<label class="radio-inline">
				  					<input type="radio" name="cssOptions" id="CSS1" value="1"> 1
				  				</label>
							</td>
							<td>
				  				<label class="radio-inline">
				  					<input type="radio" name="cssOptions" id="CSS2" value="2"> 2
				  				</label>
							</td>
							<td>
				  				<label class="radio-inline">
				  					<input type="radio" name="cssOptions" id="CSS3" value="3"> 3
				  				</label>
							</td>
							<td>
				  				<label class="radio-inline">
				  					<input type="radio" name="cssOptions" id="CSS4" value="4"> 4
				  				</label>
				  			</td>
				  			<td>
				  				<label class="radio-inline">
				  					<input type="radio" name="cssOptions" id="CSS5" value="5"> 5
								</label>
							</td>
						</tr>
						
						<tr> 	
							<td>
							  	JavaScript
							</td>
							<td>
							  	<label class="radio-inline">
				  					<input type="radio" name="jsOptions" id="JS1" value="1"> 1
				  				</label>
							</td>
							<td>
				  				<label class="radio-inline">
				  					<input type="radio" name="jsOptions" id="JS2" value="2"> 2
				  				</label>
							</td>
							<td>
				  				<label class="radio-inline">
				  					<input type="radio" name="jsOptions" id="JS3" value="3"> 3
				  				</label>
							</td>
							<td>
				  				<label class="radio-inline">
				  					<input type="radio" name="jsOptions" id="JS4" value="4"> 4
				  				</label>
				  			</td>
				  			<td>
				  				<label class="radio-inline">
				  					<input type="radio" name="jsOptions" id="JS5" value="5"> 5
								</label>
							</td>
						</tr>

						<tr> 	
							<td>
							  	PHP
							</td>
							<td>
							  	<label class="radio-inline">
				  					<input type="radio" name=phpOptions" id=PHP1" value="1"> 1
				  				</label>
							</td>
							<td>
				  				<label class="radio-inline">
				  					<input type="radio" name=phpOptions" id=PHP2" value="2"> 2
				  				</label>
							</td>
							<td>
				  				<label class="radio-inline">
				  					<input type="radio" name=phpOptions" id=PHP3" value="3"> 3
				  				</label>
							</td>
							<td>
				  				<label class="radio-inline">
				  					<input type="radio" name=phpOptions" id=PHP4" value="4"> 4
				  				</label>
				  			</td>
				  			<td>
				  				<label class="radio-inline">
				  					<input type="radio" name=phpOptions" id=PHP5" value="5"> 5
								</label>
							</td>
						</tr>

						<tr> 	
							<td>
							  	SQL
							</td>
							<td>
							  	<label class="radio-inline">
				  					<input type="radio" name=sqlOptions" id=SQL1" value="1"> 1
				  				</label>
							</td>
							<td>
				  				<label class="radio-inline">
				  					<input type="radio" name=sqlOptions" id=SQL2" value="2"> 2
				  				</label>
							</td>
							<td>
				  				<label class="radio-inline">
				  					<input type="radio" name=sqlOptions" id=SQL3" value="3"> 3
				  				</label>
							</td>
							<td>
				  				<label class="radio-inline">
				  					<input type="radio" name=sqlOptions" id=SQL4" value="4"> 4
				  				</label>
				  			</td>
				  			<td>
				  				<label class="radio-inline">
				  					<input type="radio" name=sqlOptions" id=SQL5" value="5"> 5
								</label>
							</td>
						</tr>
						<tr id="emplacementLangageSup">
						</tr>
						<tr>
							<td>
								<input type="button" value="Ajouter un langage">
							</td>
						</tr>
					</table>
					<p>Vos projets</p>
					<div class="form-group projets">
				    	<label for="projetTitre1">Titre projet 1</label>
						<input type="text" class="form-control" placeholder="Ex : mon portfolio" name="projetTitre1">
						<label for="projetUrl1">URL projet 1</label>
						<input type="text" class="form-control" placeholder="Ex : http://www.monportfolio.com" name="projetUrl1">
				  	</div>
				  	<div class="form-group projets">
				    	<label for="projetTitre2">Titre projet 2</label>
						<input type="text" class="form-control" placeholder="Ex : mon CV en ligne" name="projetTitre2">
						<label for="projetUrl2">URL projet 2</label>
						<input type="text" class="form-control" placeholder="Ex : http://www.cvenligne.com" name="projetUrl2">
				  	</div>
				  	<input type="button" value="Ajouter un projet">
				  	<button type="submit" class="btn btn-default" style="float : right">Modifier le profil</button>
				</form>

			</div>
			
	<?php include("sidebar.php"); ?>		


	<?php include("footer.php"); ?>