<?php namespace BackOffice\Repository;

// je crée ma classe EmployeRepository héritière de \Manager\EntityRepository
// Donc recupere ses méthodes et propriétés qui ne sont pas private 
class EmployeRepository extends \Manager\EntityRepository {
	public function getAllEmployes() {
		return $this->findAll(); // findAll() de \Manager\EntityRepository
	}
}