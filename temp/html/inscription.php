<?php include("header.php"); ?>

		<main id="main" class="container">
			<div id="content">
				
				<!-- VOTRE CONTENU A PARTIR D'ICI -->

	<div id="inscription_page_formulaire">		
		<h1 class="titre">Bienvenue sur WeBForce3Alumni</h1>
		<p id="bloc_gauche_text">
				Vous avez suivi une formation WebForce3, ou vous êtes en cours de formation,
				Inscrivez-vous sur WF3Alumni et intégrez, développez et améliorez 
				votre &lt;Code&gt; et votre &lt;Réseau&gt;
		</p>
		<!--BLOC GAUCHE-->
			<!--texte d'accroche-->
		<div id="bloc_gauche">		
			
				<img src="../img/dario_spagnolo.jpg"></img>
				<img src="../img/delphine_malassingne.jpeg"></img>
				<img src="../img/denis_nerborac.jpg"></img>
				<img src="../img/guillaume_sylvestre.jpg"></img>
				<img src="../img/sofiane_amari.png"></img>
				<img src="../img/maxime_vasse.jpg"></img>
				<img src="../img/stephane_bachelier.jpg"></img>
				<img src="../img/ziad_jaagoub.jpeg"></img>
				<img src="../img/dario_spagnolo.jpg"></img>
				<img src="../img/delphine_malassingne.jpeg"></img>
				<img src="../img/denis_nerborac.jpg"></img>
				<img src="../img/guillaume_sylvestre.jpg"></img>
			</div>
		</div>
		<!--BLOC DROIT-->
			<div id="bloc_droit_formulaire" class="panel panel-default">
			<!--En-tête de Formulaire-->
				<div id="titre_formulaire_inscription" class="panel-heading">
					<p class="panel-title">Nouveau sur WF3NextAlumni?</p>
					<p>Rejoignez nous ici!</p>
				</div>
				<!--Formulaire-->
				<div id="formulaire_inscription_donnees">
					<form id="formulaire_inscription_donnees_form">
						<ul>
							<li class="inline_li"><label for="prenom">Prénom<span>*</span></label></li>
							<li class="inline_li"><input type="text" name="prenom" id="prenom_form_inscription" class="form-control input-sm" placeholder="Prénom" value=""></li>
							<li class="inline_li"><label id="label_nom" for="nom">Nom<span>*</span></label></li>
							<li class="inline_li"><input type="text" name="nom" id="nom_form_inscription" class="form-control input-sm" placeholder="Nom" value=""></li>
						</ul>
						<ul>
							<li class="inline_li"><label for="email"  id="label_email" >Email<span>*</span></label></li>
							<li class="inline_li" ><input type="email" name="email" id="email_form_inscription" class="form-control input-sm" placeholder="Email" value=""></li>
						</ul>
						<ul>
							<li class="inline_li"><label for="mdp">Mot de passe<span>*</span></label></li>
							<li class="inline_li"><input type="password" name="mdp" id="mdp_form_inscription" class="form-control input-sm" ></li>
							<li class="inline_li"><input type="password" name="mdp" id="mdp_confirm_form_inscription" class="form-control input-sm" ></li>
						</ul>
						<p id="legende_saisie_mdp">saisissez votre mdp</p>
						<p id="legende_confirmation_mdp">Confirmez votre mdp</p>
						<p id="legende_instruction_mdp">(votre mot de passe doit comporter au moins 8 caratcères dont 2 spéciaux (@, /, (, {, etc...))</p>
						<ul>
							<li  id="acceptation"  class="inline"><input type="checkbox" checked><p>J'ai lu et j'accepte les <a href="">CGU</a>, <a href="">la politique de confidentialité et la politique relative aux codes de WF3Next</a></p></input></li>
						</ul>
						<button style="margin-top: 15px;" type="submit" class="btn btn-info btn-block">Je m'inscris</button>
					</form>
				</div>
			</div>

		</div>
	</div>


			



			














<?php include("sidebar.php"); ?>		

<?php include("footer.php"); ?>
