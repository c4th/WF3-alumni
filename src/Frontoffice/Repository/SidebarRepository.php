<?php namespace Frontoffice\Repository;

// je crée ma classe EmployeRepository héritière de \Manager\EntityRepository
// Donc recupere ses méthodes et propriétés qui ne sont pas private 
class SidebarRepository extends \Manager\EntityRepository {

	public function derniersInscrits() {
		$recup = $this->getDb()->query('SELECT prenom, nom, photo, date_inscription, id_etudiant FROM Etudiant ORDER BY date_inscription DESC LIMIT 10');
		$results = $recup->fetchAll();
		return $results;
	}

	public function dernieresOffres() {
		$recup = $this->getDb()->query('SELECT id_offre_emploi, offre_titre, offre_type, offre_date, offre_lieu FROM Offre ORDER BY offre_date DESC LIMIT 5');
		$results = $recup->fetchAll();
		return $results;
	}

	public function selectEntreprise() {
		$query = $this->getDb()->query('SELECT Offre.id_offre_emploi, Entreprise.entreprise_nom FROM Entreprise INNER JOIN Offre ON Offre.id_entreprise = Entreprise.id_entreprise ORDER BY id_offre_emploi DESC');
		$query -> execute();
		$recupOne = $query -> fetchAll();
		return $recupOne;
		
	}

}