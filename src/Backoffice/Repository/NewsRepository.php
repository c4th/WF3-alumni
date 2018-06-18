<?php namespace Backoffice\Repository;

// je crée ma classe EmployeRepository héritière de \Manager\EntityRepository
// Donc recupere ses méthodes et propriétés qui ne sont pas private 
class NewsRepository extends \Manager\EntityRepository {

	public function getAllNews() {
		$recup = $this->findAllFront();
		return $recup;
	}

	public function deleteNews($id) {
		$coco = "deleted";	
		$suppr = $this->getDb()->prepare('DELETE FROM news WHERE id_news ='."'".$id."'");
		$suppr->execute();  

		if($suppr->rowCount() === 1) {
			$suppr = $coco;
			$recup = $suppr;
			return $recup;
		}
	}

}