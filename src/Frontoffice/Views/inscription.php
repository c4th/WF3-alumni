<main id="main" class="container">
	<div id="content">
				
	<!-- VOTRE CONTENU A PARTIR D'ICI -->
		
		<div id="inscription_en_tete">
			<h1 class="titre">Bienvenue sur WeBForce3Alumni</h1>
			<p id="inscription_texte_presentation">
				Vous avez suivi une formation WebForce3, ou vous êtes en cours de formation, Inscrivez-vous sur WF3Alumni et intégrez, développez et améliorez votre &lt;Code&gt; et votre &lt;Réseau&gt;
			</p>
			<!--texte erreurs saisies -->
			<?php echo $parameters['msg'];?>
		</div>

		<!--BLOC GAUCHE PHOTOS-->
		<div id="inscription_bloc_gauche">
			<?php for($i=0; $i < 12; $i++) { ?>
				<a href="etudiant.php?id_etudiant=<?php echo $parameters['photo'][$i]['id_etudiant'] ?>"><img src="photos/<?php echo $parameters['photo'][$i]['photo'] ?>" title="<?php echo $parameters['photo'][$i]['prenom'] ?> <?php echo $parameters['photo'][$i]['nom'] ?>"></a>
			<?php } ?>
		</div>

		<!--BLOC DROIT FORMULAIRES-->
		<div id="inscription_bloc_droit">
			<div id="inscription_bloc_droit_header">
				<p>Nouveau sur WF3NextAlumni?</p>
				<p>Rejoignez nous ici!</p>
			</div>
			<!--Formulaire-->
			<form id="inscription_bloc_droit_formulaire" method="post">
				<ul>
					<li id="inscription_label_prenom"><label for="prenom">Prénom<span>*</span></label></li>
					<li id="inscription_input_prenom"><input type="text" name="prenom" placeholder="Prénom" value=""></li>
					
					<li id="inscription_label_nom"><label id="label_nom" for="nom">Nom<span>*</span></label></li>
					<li id="inscription_input_nom"><input type="text" name="nom" placeholder="Nom" value=""></li>
				</ul>
				<ul>
					<li id="inscription_label_email"><label for="email">Email<span>*</span></label></li>
					<li id="inscription_input_email"><input type="text" name="email" placeholder="Email" value=""></li>
				</ul>
				<ul>
					<li id="inscription_label_mdp"><label for="mdp">Mot de passe<span>*</span></label></li>
					<li id="inscription_input_mdp"><input type="password" name="password" id="password_form_inscription"></li>
					<li id="inscription_input_mdp2"><input type="password" name="password2" id="mdp_confirm_form_inscription"></li>
				</ul>
				<p id="inscription_legende_saisie_mdp">saisissez votre mdp</p>
				<p id="inscription_legende_confirmation_mdp">Confirmez votre mdp</p>
				<p id="inscription_legende_instruction_mdp">(un mot de passe avec un haut niveau de sécurité doit comporter au moins 8 caratcères dont 2 spéciaux (@, /, (, {, etc...)), au moins une majuscule et un chiffre</p>
				<ul>
					<li  id="acceptation"  class="inline"><input type="checkbox"><p>J'ai lu et j'accepte les <a href="">CGU</a>, <a href="">la politique de confidentialité et la politique relative aux codes de WF3Next</a></p></input></li>
				</ul>
				<button name="valider" type="submit" class="inscription_bloc_droit_footer">Je m'inscris</button>
			</form>			
		</div>
	
	</div> <!--Fin content-->