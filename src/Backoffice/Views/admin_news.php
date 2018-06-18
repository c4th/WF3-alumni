<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Actualités
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i> <a href="admin_index.php">Accueil</a>
            </li>
            <li class="active">
                <i class="fa fa-newspaper-o"></i> Actualités
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-md-8 col-md-offset-2">	
	
		<?php echo $parameters['msg']; ?>

		<table class="table table-striped">	
		<thead>
			<tr>
				<th>id_news</th>
				<th>titre</th>
				<th>date</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($parameters['actualites'] as $actualite) { ?>
			<tr>
				<td><?php echo $actualite['id_news']; ?></td>
				<td><?php echo $actualite['news_titre']; ?></td>
				<td><?php echo $actualite['news_date']; ?></td>
				<td><a href="?action=supprimer&id=<?php echo $actualite['id_news']; ?>">Supprimer</a></td>
			</tr>
			<?php } ?>
		</tbody>
		</table>

    </div>
</div>