<?php namespace Manager; // fichier qui gère nos echanges avec la base de données, peu importe la table utilisée (fichier generique utilisable par plusieurs sites)

class EntityRepository {
	private $db;
	//--------------
	public function __construct() {}
	//--------------
	public function getDb() {
		if(!$this->db) { // si $bdd est false 
			$PDOManager = \Manager\PDOManager::getInstance(); // comme si je faisais un new PDOManager()
			$this->db = $PDOManager->getPdo(); // je recupere l'instance de PDO pour pouvoir requeter
		}
		return $this->db; // dans tous les cas je retourne PDO
	}
	//---
	private function getTableName() {
		$table = strtolower(get_called_class());
		$recherche = array('backoffice', 'frontoffice', '\\', 'repository');
		$table = str_replace($recherche, '', $table);
		return ucfirst($table); // onvire tous les parasites pour garder Employe seul
	}
	//--
	public function findAllBack() { // methode qui correspond au "SELECT *" (pour tout afficher)
		// getDb() nous donne PDO
		// j'utilise la methode query de PDO
		$query = $this->getDb()->query('SELECT * FROM ' . $this->getTableName()); // ma requete dynamique sur n'importe quelle table venue de getTableName()

		$result = $query->fetchAll();

		if(!$result) // s'il n'y a pas de resultat
			return false; // je retourne false
		return $result; // sinon je retourne les resultats
	}
	//--
	public function findAllFront() { // methode qui correspond au "SELECT *" (pour tout afficher)
		// getDb() nous donne PDO
		// j'utilise la methode query de PDO
		$query = $this->getDb()->query('SELECT * FROM ' . $this->getTableName()); // ma requete dynamique sur n'importe quelle table venue de getTableName()

		$result = $query->fetchAll();

		if(!$result) // s'il n'y a pas de resultat
			return false; // je retourne false
		return $result; // sinon je retourne les resultats
	}
	//---
	/*
		$champs doit être un tableau numérique
		$valeurs doit être un tableau associatif (les clés sont les valeurs SQL sous forme d'argument PDO (:valeur) et les valeurs sont les parametres des
		bindvalue de PDO (exemple \PDO::PARAM_STR))
		$infos sont les infos à enregistrer (exemple le $_POST)
	*/
	public function register(Array $champs, Array $valeurs, Array $infos) {
		// inscription à la BDD 
		// INSERT INTO ....
		
		$requete = "INSERT INTO ". $this->getTableName() ."  ("; // je commence à remplir ma requete
		$nbreChamps = count($champs); // je recupere le nombre de champs pour retirer la virgule du dernier champ de la BDD
		$i=1;
		foreach($champs as $value) {
			$requete .= $value;
			if($i != $nbreChamps)
				$requete .= ','; // je met une virgule que si ce n'est pas le dernier
			$i++;
		}
		$requete .= ") VALUES (";
		$nbreValeurs = count($valeurs);
		$i=1;
		foreach($valeurs as $key => $value) {
			$requete .= $key; 
			if($i != $nbreValeurs)
				$requete .= ',';
			$i++;
		}
		$requete .= ')';
		$insertion = $this->getDb()->prepare($requete); // je prepare ma requete

		extract($infos); // je transforme les name du $_POST en variables
		foreach($valeurs as $key => $value) {
			if(preg_match('/^:/', $key)) {
				$bind = str_replace(':', '', $key); // je retire les ":" des valeurs
				$insertion->bindValue($key, ${$bind}, $value); // les name du formulaire ($_POST) doivent absolument être de même nom que les valeurs des champs SQL
			}
		}
		$insertion->execute();
		return $insertion->rowCount(); // donne le nombre de lignes insérées
	}



	/**** Fonctionnement de la fonction 'update' ****/

/* update(Array $champs, Array $values, Array $infos);

	- $champs devra être un tableau numérique contenant les champs du tableau en valeurs. La première valeur, en [0] devra être l'id unique en table.
	- $valeurs devra être un tableau associatif contenant les binds en indices et les param  en valeurs.
	- $infos devra être un tableau associatif contenant le contenu du $_POST la plupart du temps. L'indice 'id' devra contenir le $_GET contenant l'id (Cf. l'input hidden dans modifProfil.php)
*/


	public function update(Array $champs, Array $valeurs, Array $infos) {

		$requete = "UPDATE  ". ucfirst($this->getTableName()) . " SET "; // je commence à remplir ma requete
		$nbreChamps = count($champs); // je recupere le nombre de champs pour retirer la virgule du dernier champ de la BDD	

		$i=0;
		foreach($valeurs as $alias => $param){
			$requete .= $champs[$i].' = '. $alias;
			$i++;
			if($i != $nbreChamps){
				$requete .= ', ';
			}
			else {
				$requete .= ' ';
			}
			
		}
		$id = 'id_' . strtolower($this->getTableName());
		$requete .= 'WHERE ' . $champs[0] . ' = ' . $infos[$id];

		$update = $this->getDb()->prepare($requete); // je prepare ma requete
		extract($infos);

		foreach($valeurs as $alias => $param) {
			$bind = str_replace(':', '', $alias); // je retire les ":" des valeurs
			$update->bindValue($alias, ${$bind}, $param); // les name du formulaire ($_POST) doivent absolument être de même nom que les valeurs des champs SQL
		}
	$update->execute();
	return $update->rowCount();
	}


	//--
	public function findWhere($column, $value) {
		$query = $this->getDb()->query('SELECT * FROM ' . $this->getTableName() . ' WHERE ' . $column . " = '" . $value . "'");
	}
	//--
	public function findWhereNot($column, $value) {
		$query = $this->getDb()->query('SELECT * FROM ' . $this->getTableName() . ' WHERE ' . $column . " != '" . $value . "'");
	}
	//--
	public function findOne($id) {
		$query = $this->getDb()->query('SELECT * FROM ' . $this->getTableName() . ' WHERE id_' . $this->getTableName() . " = '" . $id."'");
		$query -> execute();
		$recupOne = $query -> fetch();
		return $recupOne;
	}

	public function findOneEmail($email) {
		$existEmail = 'emailExistant';
		$query = $this->getDb()->query('SELECT * FROM ' . $this->getTableName() . ' WHERE email = ' . "'".$email."'");
		$query -> execute();
		if($query->rowCount() === 1) {
			$query = $existEmail;
			$recupOneEmail = $query;
			return $recupOneEmail;
		}
		else {
			$recupOneEmail = $query -> fetch();
			return $recupOneEmail;
		}
	}
}


/*

SELECT ar.id_artisan, ar.prenom, ar.photo_profil, ex.id_experience, ex.nom, ex.description, ex.adresse 
FROM artisan ar
INNER JOIN experience ex ON ar.id_artisan = ex.id_artisan
INNER JOIN disponibilite dis ON dis.id_experience = ex.id_experience
WHERE id_experience IN 
	(SELECT id_experience,nom_exp, description, adresse 
	FROM experience 
	WHERE id_experience IN 
		(SELECT id_experience, commentaire 
		FROM disponibilite 
		WHERE date_dispo BETWEEN $search))


*/

/*
// Artisans dispos
SELECT dispo.date_dispo, ar.prenom, ar.id_artisan
FROM disponibilite dispo, artisan ar
WHERE dispo.id_artisan = ar.id_artisan
AND dispo.date_dispo BETWEEN month(2) AND month(4)

// Artisans dispos avec leur experience
SELECT dispo.date_dispo, ar.prenom, univ.nom_univers
FROM disponibilite dispo, artisan ar, experience ex, univers univ, relation_univers_exp reluniv
WHERE dispo.id_artisan = ar.id_artisan
AND ex.id_experience = ar.id_experience
AND ex.id_experience = reluniv.id_experience
AND univ.id_univers = reluniv.id_univers
AND dispo.date_dispo BETWEEN month(2) AND month(4)




*/