		<main id="main" class="container">
			<div id="content">

				<!-- VOTRE CONTENU A PARTIR D'ICI -->
				<ol class="breadcrumb">
				  <li><a href="#">Accueil</a></li>
				  <li class="active">Contact</li>
				</ol>

				<div id="contact">

					<h1 class="titre">Contact</h1>
					
					<div id="contact-ecole">
						<h1>&lt;WebForce3&gt;</h1>	
						<address>
							<p>18 rue Geoffroy l’Asnier</p>
							<p>75004 Paris</p>
							<p>FRANCE</p>
						</address>
						<div>
							<p>0 805 62 23 45 (n° vert)</p>
							<p>01 74 90 10 18</p>
							<p><a href="http://www.wf3.fr">http://www.wf3.fr</a></p>
						</div>
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2625.2106918459153!2d2.3574344000000003!3d48.854192600000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671fd10fa77a9%3A0xbefa2358f9e7a776!2s18+Rue+Geoffroy+l&#39;Asnier%2C+75004+Paris!5e0!3m2!1sfr!2sfr!4v1426760436457" width="600" height="400" frameborder="0" style="border:0"></iframe>
					</div><!-- #contact-ecole -->

					<div id="contact-admin">					
						<h1>&lt;Contacter l'administrateur du site&gt;</h1>
						<form method="post" action="send_contact.php" class="col-md-8">
							<?php echo $msg; ?>
							<div class="form-group">
								<label for="prenom">Prénom</label>
								<input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prénom">
							</div>
							<div class="form-group">
								<label for="nom">Nom</label>
								<input type="text" class="form-control" name="nom" id="nom" placeholder="Nom">
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" name="email" id="email" placeholder="Email">
							</div>
							<div class="form-group">
								<label for="objet">Objet</label>
								<input type="text" class="form-control" name="objet" id="objet" placeholder="Objet">
							</div>
								<label for="message">Message</label>
								<textarea class="form-control" rows="3" name="message" id="message" placeholder="Message"></textarea>
							<button type="submit" class="btn btn-default">Envoyer</button> 
							<button type="reset" class="btn btn-default">Effacer</button>
						</form>
					</div><!-- #contact-admin -->
				</div><!-- #contact -->
			</div><!-- #content -->