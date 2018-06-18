<?php namespace Frontoffice\Repository;

// je crée ma classe EmployeRepository héritière de \Manager\EntityRepository
// Donc recupere ses méthodes et propriétés qui ne sont pas private 
class HomeRepository extends \Manager\EntityRepository {

	public function displayActualites() {
		$recup = $this->getDb()->query('SELECT id_news, news_titre, news_date, news_description, news_photo FROM News ORDER BY news_date DESC LIMIT 3');
		$results = $recup->fetchAll();
		return $results;
	}

	public function getConnexionInfos($connexion_email, $connexion_mdp) {
		$coco = "noconnect";
		$query = $this->getDb()->query('SELECT prenom, nom, id_etudiant, admin FROM Etudiant WHERE email = '."'".$connexion_email."'".'AND password = '."'".$connexion_mdp."'");
		$query->execute();
		if($query->rowCount() === 0) {
			$query = $coco;
			$recup = $query;
			return $recup;
		}
		else {
			$recup = $query->fetch();
			return $recup;
		}
	}

	public function getEtudiantProfil($id) {
		$query = $this->getDb()->query("SELECT * FROM Etudiant WHERE id_etudiant = $id");
		$query->execute();
		$recupOne = $query->fetch();
		return $recupOne;
	}
}