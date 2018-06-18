<?php namespace Frontoffice\Controller;
class FormateursController extends \Controller\Controller { 
	public function formateursDisplay() {
		$sidebar = new SidebarController();
		$parametres = array();
		$parametres['title'] = 'Les formateurs';

		$parametres['offre'] = $sidebar->getContent();
		$parametres['etudiant'] = $sidebar->getDerniersInscrits();
		$parametres['entreprise'] = $sidebar->getInfosEntreprise();
		/* $recup = $this->getRepository('Formateurs'); // pour obtenir la classe HomeRepository 
		$univers = $recup->getUnivers(); // ceci est une méthode de HomeRepository*/
		return $this->render('formateurs', $parametres);
	}
}