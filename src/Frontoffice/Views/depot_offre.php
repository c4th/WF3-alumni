<?php
//echo '<pre>';
// var_dump($_POST);
// var_dump($parameters);

// if(isset($_POST['valider'])) $_POST['id_entreprise'] = $_SESSION['entreprise'] ;

// var_dump($_SESSION);
// $file = dirname(dirname(dirname(dirname(__FILE__))));
// $chiant= $_FILES['offre_fichier']['error'];
// echo $file.'/web/photos/';
// echo '<hr>';
// echo $chiant;
// echo '<hr>';
// var_dump($_FILES);
// echo '</pre>';



?>

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
				<?= $parameters['message'];?>
				<form id="formulaire" method="POST" enctype="multipart/form-data">
				  <div class="form-group">
				    <label for="titre_offre">Titre du poste</label>
				    <input type="text" class="form-control" placeholder="Titre de l'offre d'emploi / stage" name="offre_titre" id="titre_offre">
				  </div>
				  <div class="form-group">
				    <label for="lieu_offre">Lieu</label>
				    <input type="text" class="form-control" placeholder="Lieu de l'offre d'emploi / stage" name="offre_lieu" id="lieu_offre">
				  </div>
				  <div class="form-group">
				    <label for="type_offre">Type de contrat</label>
				    <select class="form-control" name="offre_type" id="type_offre">
					  <option value="1">cdi</option>
					  <option value="2">cdd</option>
					  <option value="3">freelance</option>
					  <option value="4">stage</option>
					</select>
				  </div>
				  <div class="form-group">
				    <label for="niveau_offre">Niveau de poste</label>
				    <select class="form-control" name="offre_niveau" id="niveau_offre">
					  <option value="1">débutant</option>
					  <option value="2">faux débutant</option>
					  <option value="3">expert</option>
					</select>
				  </div>
				  <div class="form-group">
				    <label for="duree_offre">Durée de la mission</label>
				    <input type="text" class="form-control" placeholder="Indiquer la durée de l'offre d'emploi / stage" name="offre_duree" id="duree_offre">
				  </div>
				  <div class="form-group">
				    <label for="date_entree_offre">Prise de fonction souhaitée</label>
				    <input type="text" class="form-control" placeholder="Indiquer la date souhaitée de prise de fonction" name="offre_prise_fonction" id="date_entree_offre">
				  </div>
				  <div class="form-group">
				    <label for="environnement_offre">Environnement</label>
				    <textarea class="form-control" rows="3" name="offre_environnement"  placeholder="Décrire en quelques lignes  cette offre d'emploi ou de stage" id="environnement_offre"></textarea>
				  </div>
				  <div class="form-group">
				    <label for="role_offre">Rôle du postulant</label>
				    <textarea class="form-control" rows="3" name="offre_role"  placeholder="Décrire en quelques lignes les principales missions qui seront confiées au postulant" id="role_offre"></textarea>
				  </div>
				  <div class="form-group">
				    <label for="profil_offre">Profil recherché du postulant</label>
				    <textarea class="form-control" rows="3" name="offre_profil"  placeholder="Décrire en quelques lignes le profil attendu du postulant" id="profil_offre"></textarea>
				  </div>
				  <div class="form-group">
				    <label for="interet_offre">Interêts</label>
				    <textarea class="form-control" rows="3" name="offre_interet"  placeholder="Décrire en quelques lignes les points d'intérêts de votre offre pour le postulant" id="interet_offre"></textarea>
				  </div>
				  <div class="form-group">
				    <label for="salaire_offre">Rémunération annuelle en € (brut)</label>
				    <select class="form-control" name="offre_salaire" id="salaire_offre">
					  <option value="1"> Moins de 24 000</option>
					  <option value="2">24 000 - 28 000</option>
					  <option value="3">28 000 - 32 000</option>
					  <option value="4">32 000 - 36 000</option>
					  <option value="5">Plus de 36 000</option>
					</select>
				  </div>
				  <div class="form-group">
				    <label for="skills_offre">Compétences souhaitées</label>
				    <select class="form-control" name="offre_skills" id="skills_offre">
					  <option value="1">HTML</option>
					  <option value="2">CSS</option>
					  <option value="3">Javascript</option>
					  <option value="4">PHP</option>
					  <option value="5">SQL</option>
					  <option value="5">Linux</option>
					</select>
				  </div>

				  <div class="form-group" id="fichier_emploi">
				    <label for="monfichier_emploi">Joindre un fichier</label>
				    <input type="hidden" name="MAX_FILE_SIZE" value="2097152" />
				    <input type="file" id="monfichier_emploi" name="offre_fichier">
				    <p class="help-block">*Formats acceptés: doc, docx, pdf, txt, jpeg, jpg, png, gif.</p>
				  </div>
				  <div class="form-group">
				    <label for="reference_offre">Référence de l'offre</label>
				    <input type="text" class="form-control" id="reference_offre" placeholder="Entrer la référence de cette offre" name="offre_reference">
				  </div>
				  <div class="form-group">
                   <!--  <label for="id_entreprise">Id entreprise</label> -->
				    <input type="hidden" class="form-control" name="id_entreprise" value="" id="id_entreprise">
				  </div>
                  <div class="form-group">
                    <label for="contact_projet">Personne à contacter</label>
                   <!--  <label for="nom_contact_offre">Nom</label> -->
                    	<input type="text" class="form-control" placeholder="Nom de la personne à contacter" name="offre_nom_contact" id="nom_contact_offre">
                    <!-- <label for="prenom_contact_offre">Prénom</label> -->
                    	<input type="text" class="form-control" placeholder="Prénom de la personne à contacter" name="offre_prenom_contact" id="prenom_contact_offre">
                  </div>
				  <div class="form-group">
				    <label for="reception_offre">Envoyer les candidatures à cette adresse mail</label>
				    <input type="email" class="form-control" id="reception_offre" placeholder="Entrer un email pour la réception des candidatures" name="offre_mail">
				  </div>
				  <div class="form-group">
				    <label for="phone_offre">Contact téléphonique</label>
				    <input type="tel" class="form-control" placeholder="Laisser un numéro de téléphone" name="offre_telephone" id="phone_offre" size="12" maxlength="12">
				  </div>
				  <button type="submit" class="btn btn-default" name="valider">Envoyer</button>
				</form>



			</div>