<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Entreprises
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i> <a href="admin_index.php">Accueil</a>
            </li>
            <li class="active">
                <i class="fa fa-briefcase"></i> Entreprises
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
            <th>id_entreprise</th>
            <th>Nom</th>
            <th>Ville</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($parameters['entreprises'] as $entreprise) { ?>
        <tr>
            <td><?php echo $entreprise['id_entreprise']; ?></td>
            <td><?php echo $entreprise['entreprise_nom']; ?></td>
            <td><?php echo $entreprise['entreprise_ville']; ?></td>
            <td><a href="?action=supprimer&id=<?php echo $entreprise['id_etudiant']; ?>">Supprimer</a></td>
        </tr>
        <?php } ?>
    </tbody>
    </table>
</div>