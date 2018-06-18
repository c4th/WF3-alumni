<?php namespace Frontoffice\Controller;
class ProjetController extends \Controller\Controller { 
	protected $depot_projet; 
	public function __construct() {
		$this->depot_projet =  $this->getRepository('Projet');
	}
	public function depotProjetDisplay() {
		$sidebar = new SidebarController();
		$parametres = array();
		$parametres['title'] = 'Proposer un projet';

		$parametres['offre'] = $sidebar->getContent();
		$parametres['etudiant'] = $sidebar->getDerniersInscrits();
		$parametres['entreprise'] = $sidebar->getInfosEntreprise();

		if(isset($_POST['valider'])) {
			$insertion = $this->setProjet($_POST);
			if($insertion > 0) {
				$parametres['message'] = 'Insertion OK';
			} else {
				$parametres['message'] = 'Erreur d\'insertion';
			}
			$parametres['msg'] = $this -> checkDownloadFileProjet($file);
		}	
		return $this->render('depot_projet', $parametres);
	}
	public function checkDownloadFileProjet($file) {
		$file = 'projet_fichier';
		$fileProjet = $this -> checkDownloadFiles($file);
		return $msgCheckFile;
	}
	public function setProjet(Array $infos) {
		$infos['projet_fichier'] = $_FILES['projet_fichier']['name'];
		return $this->depot_projet->registerProjet($infos);
	}
	public function projetsRealisesDisplay() {
		$sidebar = new SidebarController();
		$parametres = array();
		$parametres['title'] = 'Projets réalisés';

		$parametres['offre'] = $sidebar->getContent();
		$parametres['etudiant'] = $sidebar->getDerniersInscrits();
		$parametres['entreprise'] = $sidebar->getInfosEntreprise();

		/* $recup = $this->getRepository('ProjetRealises'); // pour obtenir la classe HomeRepository 
		$univers = $recup->getUnivers(); // ceci est une méthode de HomeRepository*/
		return $this->render('projets_realises', $parametres);
	}
}