<?php namespace Frontoffice\Repository;

// je crée ma classe EmployeRepository héritière de \Manager\EntityRepository
// Donc recupere ses méthodes et propriétés qui ne sont pas private 
class EntrepriseRepository extends \Manager\EntityRepository {

	public function registerEntreprise(Array $infos) {
		$champs = ['entreprise_nom','entreprise_statut','entreprise_siret','entreprise_adresse','entreprise_cp', 'entreprise_ville','entreprise_activite','entreprise_website','entreprise_presentation', 'entreprise_logo'];
		$valeurs = array(':entreprise_nom'=> \PDO::PARAM_STR, ':entreprise_statut' => \PDO::PARAM_STR, ':entreprise_siret'=>\PDO::PARAM_STR,':entreprise_adresse'=>\PDO::PARAM_STR,':entreprise_cp'=>\PDO::PARAM_INT, ':entreprise_ville'=>\PDO::PARAM_STR,':entreprise_activite'=>\PDO::PARAM_STR,':entreprise_website'=>\PDO::PARAM_STR, ':entreprise_presentation' => \PDO::PARAM_STR, ':entreprise_logo' => \PDO::PARAM_STR);
		return $insertEntreprise = $this->register($champs, $valeurs, $infos);			
	}
	public function selectAllEntreprises() {
		$query = $this->getDb()->findAllFront();
		return $query; 
	}

}