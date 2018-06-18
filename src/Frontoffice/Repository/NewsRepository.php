<?php namespace Frontoffice\Repository;

// je crée ma classe EmployeRepository héritière de \Manager\EntityRepository
// Donc recupere ses méthodes et propriétés qui ne sont pas private 
class NewsRepository extends \Manager\EntityRepository {
	
	public function DisplayAllNews() {
		$recup = $this->findAllFront();
		return $recup;
	}

	public function getDetailNews($id) {
		$query = $this->getDb()->query("SELECT * FROM  News WHERE id_news = $id");
		$query -> execute();
		$recupOne = $query-> fetch();
		return $recupOne;
	}

}