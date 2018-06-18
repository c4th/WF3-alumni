
<div id="banner_entreprise"></div>
<main id="main" class="container">
	<div id="content">		
		<ol class="breadcrumb">
			<li><a href="#">Accueil</a></li>
			<li class="active">Inscription des Entreprises</li>
		</ol>
		<h1 class="titre">Inscription des Entreprises</h1>
		<p></p>
		<form id="formulaire" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label for="nom_entreprise">Nom de l'entreprise</label>
				<input type="text" class="form-control" placeholder="Nom de l'entreprise" name="entreprise_nom" id="nom_entreprise">
			</div>
			<div class="form-group">
			    <label for="statut_entreprise">Statut de l'entreprise</label>
			    <select class="form-control" name="entreprise_statut" id="statut_entreprise">
					<option value="sarl">sarl</option>
					<option value="sa">sa</option>
				 	<option value="sas">sas</option>
					<option value="auto-entreprise">auto-entreprise</option>
					<option value="eirl">eirl</option>
				</select> 
			</div>
			<div class="form-group">
				<label for="siret_entreprise">SIRET</label>
				<input type="text" class="form-control" placeholder="SIRET de l'entreprise" name="entreprise_siret" id="adresse_entreprise">
			</div>
			<div class="form-group">
				<label for="adresse_entreprise">Adresse du siège social</label>
				<input type="text" class="form-control" placeholder="Siège social de l'entreprise" name="entreprise_adresse" id="adresse_entreprise">
			</div>
			<div class="form-group">
			  	<label for="cp_entreprise">CP :</label><input type="text" id="cp" size="6" name="entreprise_cp" class="form-control"/>
			  	<label for="ville_entreprise">Ville :</label><input type="text" id="ville" name="entreprise_ville" class="form-control" />	
			</div>
			<div class="form-group">
				<label for="activite_entreprise">Secteur d'activité</label>
				<input type="text" class="form-control" placeholder="Secteur d'activité" name="entreprise_activite" id="activite_entreprise">
			</div>
			<div class="form-group">
				<label for="website_entreprise">Site web de l'entreprise</label>
				<input type="text" class="form-control" placeholder="Site web de l'entreprise" name="entreprise_website" id="website_entreprise">
			</div>
			<div class="form-group">
				<label for="presentation_entreprise">Présentation</label>
				<textarea class="form-control" rows="3" name="entreprise_presentation"  placeholder="Décrire en quelques lignes  cette entreprise d'emploi ou de stage" id="presentation_entreprise"></textarea>
			</div>
			<div class="form-group" id="logo_entreprise">
				<label for="monlogo_entreprise">Joindre un logo</label>
				<input type="hidden" name="MAX_FILE_SIZE" value="2097152" />
				<input type="file" id="monlogo_entreprise" name="entreprise_logo">
				<p class="help-block">*Formats acceptés: jpeg, jpg, png, gif.</p>
			</div>
			<button type="submit" class="btn btn-default" name="valider">Envoyer</button>
		</form>			
	</div>