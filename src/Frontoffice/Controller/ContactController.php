<?php namespace Frontoffice\Controller;
class ContactController extends \Controller\Controller { 
	public function contactDisplay() {
		$sidebar = new SidebarController();

		$parametres = array();

		$parametres['title'] = 'Contact';
		$parametres['offre'] = $sidebar->getContent();
		$parametres['etudiant'] = $sidebar->getDerniersInscrits();
		$parametres['entreprise'] = $sidebar->getInfosEntreprise();
		$recup = $this->getRepository('Contact'); 
		return $this->render('contact', $parametres);
	}
}