<?php include("header.php"); ?>
		<div id="banner">
				
		</div>

		<main id="main" class="container">
			<div id="content">
				
				<!-- VOTRE CONTENU A PARTIR D'ICI -->
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Proposer un projet</li>
				</ol>
				<h1 class="titre">Confiez votre projet à la Webforce 3 !</h1>
				<p class="annonce">La Webforce 3, ce sont des étudiants formés et accompagnés par des développeurs expérimentés au service de votre projet, et c'est...<span>gratuit</span>.</p>
				<p>Webforce3, c'est aussi plus de X sessions de formations par an, profitez-en donc pour faire avancer vos projets tout en permettant à de jeunes développeurs d'affuter leurs compétences !</p>
				<h2>Remplissez ce formulaire pour recevoir une estimation rapide de la faisabilité de votre projet.</h2>
				<form id="formulaire" method="POST">
				  <div class="form-group">
				    <label for="">Titre de votre projet</label>
				    <input type="text" class="form-control" placeholder="Donnez un titre à votre projet" name="">
				  </div>
				  <div class="form-group">
				    <label for="">Type de projet</label>
				    <select class="form-control" name="">
					  <option><button type="button" class="btn btn-default" aria-label="">Site vitrine</button></option>
					  <option><button type="button" class="btn btn-default" aria-label="">Site e-commerce</button></option>
					  <option><button type="button" class="btn btn-default" aria-label="">Blog</button></option>
					  <option><button type="button" class="btn btn-default" aria-label="">Application mobile</button></option>
					</select>
				  </div>
				  <div class="form-group">
				    <label for="">Description de votre projet</label>
				    <textarea class="form-control" rows="3" name=""  placeholder="Décrivez en quelques lignes votre projet"></textarea>
				  </div>
				  <div class="form-group">
				    <label for="">Compétences recherchées</label>
				    <select class="form-control" name="">
					  <option><button type="button" class="btn btn-default" aria-label="">Intégration web</button></option>
					  <option><button type="button" class="btn btn-default" aria-label="">PHP</button></option>
					  <option><button type="button" class="btn btn-default" aria-label="">Javascript / JQuery</button></option>
					  <option><button type="button" class="btn btn-default" aria-label="">Bootstrap</button></option>
					  <option><button type="button" class="btn btn-default" aria-label="">Wordpress</button></option>
					</select>
				  </div>

				  <div class="form-group" id="fichier">
				    <label for="exampleInputFile">Joindre un cahier des charges</label>
				    <input type="file" id="monfichier" name="">
				    <p class="help-block">*Formats acceptés: doc, docx, pdf, ppt, pptx.</p>
				  </div>
				  <div class="form-group">
				    <input type="text" class="form-control" name="" value="">
				  </div>
				  <button type="submit" class="btn btn-default">Envoyer</button>
				</form>



			</div>
<?php include("sidebar.php"); ?>
		</main>


<?php include("footer.php"); ?>