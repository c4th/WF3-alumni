<?php namespace Backoffice\Controller;

class AdminEntreprisesController extends \Controller\Controller {

	public function entreprisesDisplay() {
		$parametres = array();
		$parametres['titre'] = 'Gestion Entreprises';
		$recup = $this->getRepository('Entreprise');

		$parametres['msg'] = '';

		$entreprise = $recup->getAllEntreprise();
		$parametres['entreprises'] = $entreprise;		

		if (!empty($_SESSION['user']) && $_SESSION['user']['admin'] == 1) {
			return $this->render('admin_entreprises', $parametres);	
		} else {
			header('location: index.php');	
		}

	}
}