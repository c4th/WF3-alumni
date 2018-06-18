<?php namespace BackOffice\Repository;

// je crée ma classe EmployeRepository héritière de \Manager\EntityRepository
// Donc recupere ses méthodes et propriétés qui ne sont pas private 
class OffreRepository extends \Manager\EntityRepository {

	public function getAllOffre() {
		$recup = $this->findAllFront();
		return $recup;
	}
}