<?php namespace Backoffice\Controller;

class AdminHomeController extends \Controller\Controller {

	protected $getNbStudents;
	protected $getNbEntreprises;
	protected $getNbOffers;

	public function __construct() {
		$this->getNbStudents = $this->getRepository('Home');
		$this->getNbEntreprises = $this->getRepository('Home');
		$this->getNbOffers = $this->getRepository('Home');
	}

	public function homeDisplay() {
		$parametres = array();
		$parametres['titre'] = 'Administration';
		$recup = $this->getRepository('Home');

		$nbEtudiants = $this->showNbStudents();
		$parametres['nbEtudiants'] = $nbEtudiants;

		$nbEntreprises = $this->showNbOffers();
		$parametres['nbEntreprises'] = $nbEntreprises;

		$nbOffres = $this->showNbOffers();
		$parametres['nbOffres'] = $nbOffres;

		// Gestion du bouton de déconnexion
		if (isset($_GET['action']) && $_GET['action'] == "deconnecter") {
				session_destroy();
				header('location: index.php');
				exit();
		}		

		if (!empty($_SESSION['user']) && $_SESSION['user']['admin'] == 1) {
			return $this->render('admin_accueil', $parametres);	
		} else {
			header('location: index.php');	
		}

	return $this->render('admin_accueil', $parametres);

	}

	public function showNbStudents() {
		return $this->getNbStudents->selectNbStudents();	
	}

	public function showNbEntreprises() {
		return $this->getNbEntreprises->selectNbEntreprises();	
	}

	public function showNbOffers() {
		return $this->getNbOffers->selectNbOffers();	
	}

}