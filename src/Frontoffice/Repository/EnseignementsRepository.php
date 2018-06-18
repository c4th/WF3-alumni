<?php namespace Frontoffice\Repository;

// je crée ma classe EmployeRepository héritière de \Manager\EntityRepository
// Donc recupere ses méthodes et propriétés qui ne sont pas private 
class EnseignementsRepository extends \Manager\EntityRepository {
	//-------------
	/*public function getUnivers() {
	$query = $this->getDb()->query('SELECT nom_univers, desc_univers, photo_univers
		FROM univers');
	$result = $query->fetchAll(\PDO::FETCH_CLASS, '\Frontoffice\Entity\Univers');

	if(!$result) 
		return false; 
	return $result; 
	}
	//------------
	public function getArtisansExperience() { // $dateDebut, $dateFin, $univers
	$query = $this->getDb()->prepare('SELECT dispo.date_dispo, ar.prenom_artisan, univ.nom_univers
	FROM disponibilite dispo, artisan ar, experience ex, univers univ, relation_univers_exp reluniv
	WHERE dispo.id_artisan = ar.id_artisan
	AND ex.id_artisan = ar.id_artisan
	AND ex.id_experience = reluniv.id_experience
	AND univ.id_univers = reluniv.id_univers
	AND univ.nom_univers = :univers
	AND dispo	.date_dispo BETWEEN :dateDebut AND :dateFin
	');
	$dateDebut = explode('/', $_POST['dateDebut']);
	$dateFin = explode('/', $_POST['dateFin']);
	$dateDebut = $dateDebut[2] . '-' . $dateDebut[1] . '-' . $dateDebut[0];
	$dateFin = $dateFin[2] . '-' . $dateFin[1] . '-' . $dateFin[0];
	$query->bindValue(':univers',$_POST['univers'], \PDO::PARAM_STR);
	$query->bindValue(':dateDebut',$dateDebut, \PDO::PARAM_STR);
	$query->bindValue(':dateFin',$dateFin, \PDO::PARAM_STR);
	$query-> execute();
	$result = $query->fetchAll();

	if(!$result) 
		return false; 
	return $result;	
	}

	public function getRequete() {
		$query = $this->getDb()->query('SELECT ma requete');
		$result = $query->fetchAll();

		if(!$result) 
			return false; 
		return $result;	
		}*/

	}