<?php namespace Frontoffice\Repository;
class OffreRepository extends \Manager\EntityRepository {

	public function registerOffre(Array $infos) {
		$champs = ['offre_titre','offre_lieu','offre_type','offre_environnement','offre_salaire', 'offre_fichier','offre_mail','offre_telephone','offre_date', 'offre_niveau', 'offre_duree', 'offre_prise_fonction', 'offre_role', 'offre_profil', 'offre_interet', 'offre_skills','offre_reference','id_entreprise','offre_nom_contact'];
		$valeurs = array(':offre_titre'=> \PDO::PARAM_STR, ':offre_lieu' => \PDO::PARAM_STR, ':offre_type'=>\PDO::PARAM_STR,':offre_environnement'=>\PDO::PARAM_STR,':offre_salaire'=>\PDO::PARAM_INT, ':offre_fichier'=>\PDO::PARAM_STR,':offre_mail'=>\PDO::PARAM_STR,':offre_telephone'=>\PDO::PARAM_STR, 'now()' => '', ':offre_niveau' => \PDO::PARAM_INT, ':offre_duree' => \PDO::PARAM_STR, ':offre_prise_fonction' => \PDO::PARAM_STR, ':offre_role' => \PDO::PARAM_STR, ':offre_profil' => \PDO::PARAM_STR, ':offre_interet' => \PDO::PARAM_STR, ':offre_skills' => \PDO::PARAM_INT, ':offre_reference'=> \PDO::PARAM_STR, ':id_entreprise'=> \PDO::PARAM_INT,':offre_nom_contact'=> \PDO::PARAM_STR);
		return $insertOffre = $this->register($champs, $valeurs, $infos);			
	}
	public function selectAllOffers() {
		$query = $this->getDb()->query('SELECT * FROM Offre ORDER BY id_offre_emploi DESC');

		$result = $query->fetchAll();

		if(!$result) // s'il n'y a pas de resultat
			return false; // je retourne false
		return $result; 
	}


	//
	public function getDetailOffre($id) { //Affichage d'une offre
	$query = $this->getDb()->query("SELECT * FROM  Offre WHERE id_offre_emploi = $id");
	$query -> execute();
	$recupOne = $query-> fetch();
	return $recupOne;
	}

	//
	public function getDetailEntreprise($id) {
		$query = $this->getDb()->query("SELECT * FROM Entreprise WHERE id_entreprise = $id");
		$query->execute();
		$recupOne = $query-> fetch();
		return $recupOne;
	}

	public function selectEntreprise()	 {
		//$query = $this->getDb()->query("'".'SELECT * FROM Entreprise INNER JOIN Offre ON Entreprise.id_entreprise = Offre.id_entreprise WHERE id_offre_emploi = '.$id."'");
		$query = $this->getDb()->query('SELECT Entreprise.entreprise_logo, Offre.id_offre_emploi, Entreprise.entreprise_nom FROM Entreprise INNER JOIN Offre ON Offre.id_entreprise = Entreprise.id_entreprise ORDER BY id_offre_emploi DESC');
		$query -> execute();
		$recupOne = $query -> fetchAll();
		return $recupOne;
		
	}
}

