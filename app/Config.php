<?php
class Config {

	protected $parameters;

	public function __construct() {
		
	if (session_status() == PHP_SESSION_NONE) {
	    session_start();
	}
		
		// __DIR__ donne le dossier parent du fichier courant 
		require(__DIR__ . '/Config/parameters.php'); // j'inclus le fichier qui contient mes paremetres de connexion
		$this->parameters = $parameters; // variable qui se trouve dans le fichier Config/parameters.php
	}
	public function getParametersConnect() {
		return $this->parameters['connect']; // je recupere le contenu de ['connect'] du fichier Config/parameters.php
	}
}
//---------------------------------
/*$conf = new Config();
echo '<pre>';
print_r($conf->getParametersConnect()); // on constate qu'on recupere bien les paremetres de connexion à la BDD 
echo '</pre>';*/