<?php include("header.php"); ?>
		<div id="banner_emploi"></div>

		<main id="main" class="container">
			<div id="content">
				
				<!-- VOTRE CONTENU A PARTIR D'ICI -->
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Déposer une offre</li>
				</ol>
				<h1 class="titre">Déposer une offre d'emploi ou de stage</h1>
				<p></p>
				<p></p>
				
				<form id="formulaire" method="POST">
				  <div class="form-group">
				    <label for="">Titre du poste</label>
				    <input type="text" class="form-control" placeholder="Titre de l'offre d'emploi / stage" name="">
				  </div>
				  <div class="form-group">
				    <label for="">Type de contrat</label>
				    <select class="form-control" name="">
					  <option value="1">cdi</option>
					  <option value="2">cdd</option>
					  <option value="3">freelance</option>
					  <option value="4">stage</option>
					</select>
				  </div>
				  <div class="form-group">
				    <label for="">Description du poste</label>
				    <textarea class="form-control" rows="3" name=""  placeholder="Décrire en quelques lignes  l'offre d'emploi ou de stage"></textarea>
				  </div>
				  <div class="form-group">
				    <label for="">Rémunaration 	annuelle en € (brut)</label>
				    <select class="form-control" name="">
					  <option value="1"> Moins de 24 000</option>
					  <option value="2">24 000 - 28 000</option>
					  <option value="3">28 000 - 32 000</option>
					  <option value="4">32 000 - 36 000</option>
					  <option value="5">Plus de 36 000</option>
					</select>
				  </div>

				  <div class="form-group" id="fichier_emploi">
				    <label for="exampleInputFile">Joindre un fichier</label>
				    <input type="file" id="monfichier_emploi" name="">
				    <p class="help-block">*Formats acceptés: doc, docx, pdf, ppt, pptx.</p>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Envoyer les candidatures à cette adresse mail</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Entrer un email pour la réception des candidatures">
				  </div>
				  <div class="form-group">
				    <label for="">Contact téléphonique</label>
				    <input type="text" class="form-control" placeholder="Laisser un numéro de téléphone" name="">
				  </div>
				  <button type="submit" class="btn btn-default">Envoyer</button>
				</form>



			</div>
<?php include("sidebar.php"); ?>
		</main>


<?php include("footer.php"); ?>