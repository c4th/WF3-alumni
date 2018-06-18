<?php namespace Frontoffice\Repository;

// je crée ma classe ProjetRepository héritière de \Manager\EntityRepository
// Donc recupere ses méthodes et propriétés qui ne sont pas private 
class ProjetRepository extends \Manager\EntityRepository {
	public function registerProjet(Array $infos) {
		$champs = ['projet_titre','projet_type','projet_description','projet_skills', 'projet_fichier','id_entreprise','projet_nom_contact','projet_prenom_contact','projet_mail','projet_telephone'];
		$valeurs = array(':projet_titre'=> \PDO::PARAM_STR,':projet_type'=>\PDO::PARAM_STR,':projet_description'=>\PDO::PARAM_,':projet_skills'=>\PDO::PARAM_INT, ':projet_fichier'=>\PDO::PARAM_STR,':id_entreprise'=>\PDO::PARAM_INT,':projet_nom_contact'=>\PDO::PARAM_STR, ':projet_prenom_contact' => \PDO::PARAM_STR, ':projet_mail' => \PDO::PARAM_STR,':projet_telephone' => \PDO::PARAM_INT);
		return $insertOffre = $this->register($champs, $valeurs, $infos);			
	}
}