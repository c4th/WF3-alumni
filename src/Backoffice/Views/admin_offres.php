<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Offres
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i> <a href="admin_index.php">Accueil</a>
            </li>
            <li class="active">
                <i class="fa fa-file-text-o"></i> Offres
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="col-md-8 col-md-offset-2">
	
	<?php echo $parameters['msg']; ?>

	<table class="table table-striped">	
	<thead>
		<tr>
			<th>id_offre_emploi</th>
			<th>Type</th>
			<th>Titre</th>
			<th>Ville</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($parameters['offres'] as $offre) { ?>
		<tr>
			<td><?php echo $offre['id_offre_emploi']; ?></td>
			<td><?php echo $offre['offre_type']; ?></td>
			<td><?php echo $offre['offre_titre']; ?></td>
			<td><?php echo $offre['offre_lieu']; ?></td>
			<td><a href="?action=supprimer&id=<?php echo $offre['id_offre_emploi']; ?>">Supprimer</a></td>
		</tr>
		<?php } ?>
	</tbody>
	</table>
</div>