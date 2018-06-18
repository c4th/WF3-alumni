<?php namespace Frontoffice\Controller;
class AgendaController extends \Controller\Controller { 
	public function agendaDisplay() {
		$sidebar = new SidebarController();
		$parametres = array();
		$parametres['title'] = 'Agenda';

		$parametres['offre'] = $sidebar->getContent();
		$parametres['etudiant'] = $sidebar->getDerniersInscrits();
		$parametres['entreprise'] = $sidebar->getInfosEntreprise();
		
		$recup = $this->getRepository('Agenda'); // pour obtenir la classe HomeRepository 
		/*$univers = $recup->getUnivers(); // ceci est une méthode de HomeRepository*/
		return $this->render('agenda', $parametres);
	}
}