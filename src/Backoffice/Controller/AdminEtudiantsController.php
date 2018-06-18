<?php namespace Backoffice\Controller;

class AdminEtudiantsController extends \Controller\Controller {

	public function etudiantsDisplay() {
		$parametres = array();
		$parametres['titre'] = 'Gestion Etudiants';
		$recup = $this->getRepository('Etudiant');

		$parametres['msg'] = '';
		
		$etudiants = $recup->getAllEtudiant();
		$parametres['etudiants'] = $etudiants;		

		if (!empty($_SESSION['user']) && $_SESSION['user']['admin'] == 1) {
			return $this->render('admin_etudiants', $parametres);	
		} else {
			header('location: index.php');	
		}	

	}
}