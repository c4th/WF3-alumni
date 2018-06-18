<?php namespace BackOffice\Repository;
 
class HomeRepository extends \Manager\EntityRepository {

	public function selectNbStudents() {		
		$query = $this->getDb()->query('SELECT * FROM Etudiant');
		$result = $query->rowCount();
		return $result;
	}

	public function selectNbOffers() {		
		$query = $this->getDb()->query('SELECT * FROM Offre');
		$result = $query->rowCount();
		return $result;
	}

}