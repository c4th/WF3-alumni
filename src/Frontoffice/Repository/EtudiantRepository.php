<?php namespace Frontoffice\Repository;

// je crée ma classe EmployeRepository héritière de \Manager\EntityRepository
// Donc recupere ses méthodes et propriétés qui ne sont pas private 
class EtudiantRepository extends \Manager\EntityRepository {
	//-------------

	public function getInfosEtudiant($id){
		$query = $this->findOne($id);
		return $query;
	}

	public function updateInfosEtudiant($infos){
		$champs = ['id_etudiant', 'nom', 'prenom', 'email', 'ville', 'statut', 'poste', /*'photo' ,*/ 'html', 'css', 'php', 'javascript','mysql', 'linux', 'presentation', 'url_projet1', 'desc_projet1', 'url_projet2', 'desc_projet2' , 'url_projet3', 'desc_projet3', 'url_projet4', 'desc_projet4'];
		$valeurs = array(':id_etudiant' => \PDO::PARAM_INT, ':nom' => \PDO::PARAM_STR, ':prenom' => \PDO::PARAM_STR, ':email' => \PDO::PARAM_STR, ':ville' => \PDO::PARAM_STR, ':statut' => \PDO::PARAM_INT, ':poste' => \PDO::PARAM_STR, /*':photo' => \PDO::PARAM_STR,*/ ':html' => \PDO::PARAM_INT, ':css'=> \PDO::PARAM_INT, ':php'=> \PDO::PARAM_INT, ':javascript'=> \PDO::PARAM_INT,':mysql'=> \PDO::PARAM_INT, ':linux'=> \PDO::PARAM_INT, ':presentation'=> \PDO::PARAM_STR, ':url_projet1'=> \PDO::PARAM_STR, ':desc_projet1'=> \PDO::PARAM_STR, ':url_projet2'=> \PDO::PARAM_STR, ':desc_projet2' => \PDO::PARAM_STR, ':url_projet3' => \PDO::PARAM_STR, ':desc_projet3' => \PDO::PARAM_STR, ':url_projet4' => \PDO::PARAM_STR, ':desc_projet4' => \PDO::PARAM_STR);
		$query = $this->update($champs, $valeurs, $infos);
		return $query;
	}

	public function registerEtudiant(Array $infos) { // J'entre l'étudiant en BDD
		$champs = ['nom', 'prenom', 'email', 'password'];
		$valeurs = array(':nom' => \PDO::PARAM_STR, ':prenom' => \PDO::PARAM_STR, ':email' => \PDO::PARAM_STR, ':password' => \PDO::PARAM_STR);
		return $inserEtudiants = $this ->register($champs, $valeurs, $infos);
	}

	public function verifMail($email) {
		$query = $this->findOneEmail($email);
		return $query;
	}
	
	public function selectAllStudents() {
		$query = $this -> findAllFront();
		return $query;
	}

	public function inscritsAleatoire() {
		$recup = $this->getDb()->query("SELECT prenom, nom, photo, id_etudiant FROM Etudiant ORDER BY RAND() LIMIT 12");
		$results = $recup->fetchAll();
		return $results;
	}
}
