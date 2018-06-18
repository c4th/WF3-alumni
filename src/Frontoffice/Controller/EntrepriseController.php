<?php namespace Frontoffice\Controller;
class EntrepriseController extends \Controller\Controller { 
	
	static protected $entreprise = false;
	public function __construct() {
		if(!self::$entreprise) {
			self::$entreprise = $this->getRepository('Entreprise'); // pour obtenir la classe OffreRepository qui me permet de récuperer ses méthodes pour requetes en BDD
		}
	}

	public function inscription_entrepriseDisplay() {
	$sidebar = new SidebarController();
	$parametres = array();
	$parametres['title'] = 'Inscription des Entreprises';

	$parametres['offre'] = $sidebar->getContent();
	$parametres['etudiant'] = $sidebar->getDerniersInscrits();
	$parametres['entreprise'] = $sidebar->getInfosEntreprise();

	if(isset($_POST['valider'])) {
		$inscription = $this->setEntreprise($_POST);
		if($inscription > 0) {
			$parametres['message'] = '<p class="success bg-success" role="success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Insertion OK</p>';
		} else {
			$parametres['message'] = '<p class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>Erreur d\'insertion</p>';
		}
		$parametres['message'] = $this -> checkDownloadFileEntreprise($file);

	}			
	return $this->render('inscription_entreprise', $parametres);
	}

	public function setEntreprise(Array $infos) {
		$infos['entreprise_logo'] = $_FILES['entreprise_logo']['name'];
		return self::$entreprise->registerEntreprise($infos);
	}
	public function checkDownloadFileEntreprise($file) {
		$file = 'entreprise_logo';
		$msgCheckFile = $this-> checkDownloadFiles($file);
		return $msgCheckFile;
	}
	public function entreprisesDisplay() {
		$sidebar = new SidebarController();
		$parametres = array();
		$parametres['title'] = 'Liste des Entreprises';

		$parametres['offre'] = $sidebar->getContent();
		$parametres['etudiant'] = $sidebar->getDerniersInscrits();
		$parametres['entreprise'] = $sidebar->getInfosEntreprise();

		$afficheEntreprises = $this ->showAllEntreprises();
		$parametres['gallery'] = $afficheEntreprises;
		return $this->render('offres', $parametres);
	}
	public function showAllEntreprises() {
		return self::$entreprise->selectAllEntreprises();
	}

}