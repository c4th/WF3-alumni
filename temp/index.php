<?php include("html/header.php"); ?>


<main id="main" class="container">
			<div id="content">
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
						<button><a href="#">S'inscrire</a></button>
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
						<button><a href="#">Créer un compte</a></button>
					</div>
					<div id="identification" class="encart">
						<h1>&lt;Déjà inscrit ?&gt;</h1>
						<hr>
						<form id="form" method="post" action="">
							<input type="text" name="email" placeholder="E-mail">
							<input type="password" name="password" placeholder="Mot de passe">
							<a href="#">Mot de passe oublié ?</a>
							<button type="submit">Me connecter</button>
						</form>
					</div>
				</div><!-- #inscription-box -->

				<div id="last-news">
					<h1>Dernières Actualités</h1>

					<div class="news">
						<div class="news-photo"></div>
						<h2>Coucou</h2>					
						<p class="news-date">21 mai 2015</p>
						<p class="news-abstract">I love chocolate bar caramels donut gummi bears marzipan sweet. I love oat cake apple pie macaroon dragée apple pie carrot cake chocolate bar marzipan. Sweet cake I love chocolate bar cake apple pie tart I love. Cake icing gummi bears sweet dragée marshmallow cake topping I love.</p>
					</div><!-- #news -->

					<div class="news">
						<div class="news-photo"></div>
						<h2>Coucou</h2>					
						<p class="news-date">21 mai 2015</p>
						<p class="news-abstract">I love chocolate bar caramels donut gummi bears marzipan sweet. I love oat cake apple pie macaroon dragée apple pie carrot cake chocolate bar marzipan. Sweet cake I love chocolate bar cake apple pie tart I love. Cake icing gummi bears sweet dragée marshmallow cake topping I love.</p>
					</div><!-- #news -->

					<div class="news">
						<div class="news-photo"></div>
						<h2>Coucou</h2>					
						<p class="news-date">21 mai 2015</p>
						<p class="news-abstract">I love chocolate bar caramels donut gummi bears marzipan sweet. I love oat cake apple pie macaroon dragée apple pie carrot cake chocolate bar marzipan. Sweet cake I love chocolate bar cake apple pie tart I love. Cake icing gummi bears sweet dragée marshmallow cake topping I love.</p>
					</div><!-- #news -->

				</div><!-- #last-news -->

			</div><!-- #content -->

			<div id="sidebar">

				<div class="sidebar-box">
					<h1>prochains événements</h1>
					<p>coucou</p>
				</div><!-- #sidebar-box -->

				<div class="sidebar-box">
					<h1>derniers inscrits</h1>
					<p>coucou</p>
				</div><!-- #sidebar-box -->

				<div class="sidebar-box">
					<h1>dernières offres</h1>
					<p>coucou</p>
				</div><!-- #sidebar-box -->

			</div><!-- #sidebar -->
		
<?php include("html/sidebar.php"); ?>

		</main>


<?php include("html/footer.php"); ?>