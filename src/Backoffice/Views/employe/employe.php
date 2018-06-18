<hr>
<table border="1" align="center" style="border: border-collapse;">
	<tr>
		<th>idEmploye</th>
		<th>prénom</th>
		<th>nom</th>
		<th>sexe</th>
		<th>service</th>
		<th>dateEmbauche</th>
		<th>salaire</th>
		<th>idSecteur</th>
	</tr>
	<?php foreach($parameters['employes'] as $employe ) : ?>
	<tr>
		<td><?php echo $employe->getIdEmploye(); ?></td>
		<td><?php echo $employe->getPrenom(); ?></td>
		<td><?php echo $employe->getNom(); ?></td>
		<td><?php echo $employe->getSexe(); ?></td>
		<td><?php echo $employe->getService(); ?></td>
		<td><?php echo $employe->getDateEmbauche(); ?></td>
		<td><?php echo $employe->getSalaire(); ?></td>
		<td><?php echo $employe->getIdSecteur(); ?></td>
	</tr>
	<?php endforeach; ?>
</table>