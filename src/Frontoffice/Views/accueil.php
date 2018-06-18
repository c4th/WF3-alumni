<?php

function cutString($text, $max_length, $end = '... ') {
	if (strlen($text) <= $max_length) {
		return $text;
	}
	$text = wordwrap($text, $max_length, '|');
	$text = explode('|', $text);
	return $text[0].$end;
}

?>

<main id="main" class="container">
	<div id="content">
		<!-- VOTRE CONTENU A PARTIR D'ICI -->
		<div id="inscription-box">
			<div id="inscription-etudiants" class="encart">
				<h1>&lt;Etudiants&gt;</h1>
				<hr>
				<ul>
					<li>Partagez vos expériences</li>
					<li>Mettez à jour votre profil</li>
					<li>Developpez votre réseau</li>
					<li>Participez à la vie du réseau</li>
				</ul>
				<a href="inscription.php"><button>S'inscrire</button></a>
			</div>
			<div id="inscription-entreprises" class="encart">
				<h1>&lt;Entreprises&gt;</h1>
				<hr>
				<ul>
					<li>Présentez votre activité</li>
					<li>Déposez des offres d’emploi</li>
					<li>Trouvez des nouveaux talents</li>
					<li>Accédez à la CVthèque</li>
				</ul>
				<a href="inscription_entreprise.php"><button>Créer un compte</button></a>
			</div>
			<?php if(isset($_SESSION['user'])) {
				echo '
				<div id="identification" class="encart">
					<h1>&lt;Mon compte&gt;</h1>
					<hr>
					<h2>Bonjour</h2>
					<h3>'.$_SESSION['user']['prenom'].' '.$_SESSION['user']['nom'].'</h3>
						<a href="etudiant.php?id_etudiant='.$_SESSION['user']['id_etudiant'].'"><button>Mon profil</button></a>
						<a href="index.php?action=deconnecter"><button>Me déconnecter</button></a>';
				} else {
					echo '
					<div id="identification" class="encart">
						<h1>&lt;Déjà inscrit ?&gt;</h1>
						<hr>		
						<form id="form-accueil" method="post" action="index.php">
							<input type="text" name="connexion_email" placeholder="E-mail">
							<input type="password" name="connexion_mdp" placeholder="Mot de passe">
							<a href="#" id="oubli_mdp">Mot de passe oublié ?</a>
							<button type="submit" name="connecter">Me connecter</button>'
							.$parameters['msg'].
						'</form>';
				} ?>
			</div>
		</div><!-- #inscription-box -->
		<div class="alert-danger" id="alert-construction" role="alert"><span class="glyphicon glyphicon-warning-sign"></span> SITE EN CONSTRUCTION <span class="glyphicon glyphicon-warning-sign"></span></div>
		<div id="last-news">
			<h1>Dernières Actualités</h1>
			
			<?php for ($i=0; $i <3; $i++) { ?>
			<div class="news">
				<div class="news-photo"><img src="photos/<?php echo $parameters['actualite'][$i]['news_photo'] ?>"></div>
				<h2><?php echo $parameters['actualite'][$i]['news_titre'] ?></h2>					
				<p class="news-date"><?php echo $parameters['actualite'][$i]['news_date'] ?></p>
				<p class="news-abstract"><?php echo cutString($parameters['actualite'][$i]['news_description'], 200); ?><a href="news_detail.php?id=<?php echo $parameters['actualite'][$i]['id_news'] ?>" >[ En savoir plus ]</a></p>
			</div><!-- #news -->
			<?php } ?>

		</div><!-- #last-news -->
	</div><!-- #content -->