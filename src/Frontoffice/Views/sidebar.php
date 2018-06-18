<div id="sidebar">
	<div class="sidebar-box">
		<h1><span class="glyphicon glyphicon-calendar"></span> agenda</h1>
		<p>coucou</p>
	</div><!-- .sidebar-box -->

<div class="sidebar-box">
		<h1><span class="glyphicon glyphicon-user"></span>derniers inscrits</h1>
		<div id="last-members-box">
			<?php for ($i=0; $i < 10; $i++) { ?>
			<a href="etudiant.php?id_etudiant=<?php echo $parameters['etudiant'][$i]['id_etudiant'] ?>"><img src="photos/<?php echo $parameters['etudiant'][$i]['photo'] ?>" title="<?php echo $parameters['etudiant'][$i]['prenom'] ?> <?php echo $parameters['etudiant'][$i]['nom'] ?>"></a>
				
			<?php } ?>
		</div><!-- #last-members-box -->
	</div><!-- .sidebar-box -->

	<div class="sidebar-box">
		<h1><span class="glyphicon glyphicon-briefcase"></span>dernières offres</h1>
		
		<?php for ($i=0; $i<5; $i++) { ?>
			<div class="sidebar-offres">
				<div class="offres-infos">
					<p class="tag tag-<?php echo strtolower($parameters['offre'][$i]['offre_type']) ?>"><?php echo $parameters['offre'][$i]['offre_type'] ?></p>
					<p class="offres-date"><?php echo $parameters['offre'][$i]['offre_date'] ?></p>
				</div>
				<h2><?php echo $parameters['offre'][$i]['offre_titre'] ?></h2>
				<p><?php echo $parameters['entreprise'][$i]['entreprise_nom'] ?>, <?php echo $parameters['offre'][$i]['offre_lieu'] ?></p>
				<a href="offre_detail.php?id_offre=<?php echo $parameters['offre'][$i]['id_offre_emploi'] ?>">[ En savoir plus ]</a>
			</div><!-- #sidebar-offres -->
			
		<?php } ?>

	</div><!-- #sidebar-box -->
</div><!-- #sidebar -->