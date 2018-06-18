<?php namespace Manager;
// cette classe representera la connexion à la BDD avec un singleton sur PDO pour être sûr qu'il n'y a pas plusieurs espaces mémoires utilisés pour la même connexion

class PDOManager {
	static private $instance = false;
	protected $pdo;
	//----------------
	private function __construct() {} // je verrouille l'instance par le new
	private function __clone() {} // je verrouille le clonage
	//----------------
	static public function getInstance() {
		if(!self::$instance) // si $instance est false (lors de la tte 1ere instance)
			self::$instance = new self; // alors je stock l'instance dans $instance
		return self::$instance; // dans tous les cas je return $instance
	}
	//---
	public function getPdo() {
		include_once(__DIR__ . '/../../app/Config.php'); // je recupere le fichier Config.php pour pouvoir instancier ma classe Config
		$config = new \Config(); // j'instancie ma classe en repartant bien dans le namespace global (avec le back slash)
		$connect = $config->getParametersConnect(); // je recupere les parametres de connexion qui se trouve dans la classe Config
		// $connect contient les informations du fichier app/Config/parameters.php
		// j'affecte mes variables avec les valeurs de $connect
		$DSN = 'mysql:host=' . $connect['host'] . ';dbname=' . $connect['dbname'];
		$user = $connect['user'];
		$password = $connect['password'];
		$options = array(
			// Attention PDO se trouve dans le namespace global donc back slash avant
			// sinon ça declenche l'autoload
			\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION, // mode erreur exception
			\PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC, // à defaut pour tous mes fetch, je veux un fetch assoc
			\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
			);
		try {
			$this->pdo = new \PDO($DSN,$user,$password,$options); // je crée une connexion en instaciant PDO (comme d'hab). Attention PDO se trouve dans le namespace global donc back slash avant sinon ça declenche l'autoload
		} catch (\PDOException $e) { // en cas d'erreur PDO fait un throw new PDOException, je le recupere avec le message d'erreur
			echo 'Connexion échouée : ' . $e->getMessage();
		}
		return $this->pdo;
	}
}