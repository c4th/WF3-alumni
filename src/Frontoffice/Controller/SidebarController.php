<?php namespace Frontoffice\Controller;

class SidebarController extends \Controller\Controller {
	static public $instances = 0;

	public function __construct() {
		self::$instances++;
	}

	public function getContent() {
		$parametres = array();
		$parametres['title'] = 'Sidebar';
		$recup = $this->getRepository('Sidebar');

		// Affiche les 5 offres les plus récentes
		$offres = $recup->dernieresOffres();
		return $offres;

		// Affiche les 10 derniers inscrits
		$etudiants = $recup->derniersInscrits();		
		return $etudiants;

	}

	public function getDerniersInscrits() {
		$parametres = array();
		$recup = $this->getRepository('Sidebar');

		// Affiche les 5 offres derniers inscrits
		$etudiants = $recup->derniersInscrits();		
		return $etudiants;
	}

	public function getInfosEntreprise() {
		$parametres = array();
		$recup = $this->getRepository('Sidebar');

		$entreprise = $recup->selectEntreprise();		
		return $entreprise;

	}


}