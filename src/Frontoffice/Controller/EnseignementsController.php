<?php namespace Frontoffice\Controller;
class EnseignementsController extends \Controller\Controller { 
	public function enseignementsDisplay() {
		$sidebar = new SidebarController();
		$parametres = array();
		$parametres['title'] = 'Les enseignements';

		$parametres['offre'] = $sidebar->getContent();
		$parametres['etudiant'] = $sidebar->getDerniersInscrits();
		$parametres['entreprise'] = $sidebar->getInfosEntreprise();
		
		$recup = $this->getRepository('Enseignements'); // pour obtenir la classe HomeRepository 
		/*$univers = $recup->getUnivers(); // ceci est une méthode de HomeRepository*/
		return $this->render('enseignements', $parametres);
	}
}