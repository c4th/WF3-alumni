<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Etudiants
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i> <a href="admin_index.php">Accueil</a>
            </li>
            <li class="active">
                <i class="fa fa-user"></i> Etudiants
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
			<th>id_etudiant</th>
			<th>Nom</th>
			<th>Prenom</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($parameters['etudiants'] as $etudiant) { ?>
		<tr>
			<td><?php echo $etudiant['id_etudiant']; ?></td>
			<td><?php echo $etudiant['nom']; ?></td>
			<td><?php echo $etudiant['prenom']; ?></td>
			<td><a href="?action=supprimer&id=<?php echo $etudiant['id_etudiant']; ?>">Supprimer</a></td>
		</tr>
		<?php } ?>
	</tbody>
	</table>
</div>