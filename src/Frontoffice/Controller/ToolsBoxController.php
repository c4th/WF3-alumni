<?php namespace Frontoffice\Controller;
class ToolsBoxController extends \Controller\Controller { 
	public function ToolsBoxDisplay() {
		$sidebar = new SidebarController();
		$parametres = array();
		$parametres['title'] = 'Boite à outils du développeur';

		$parametres['offre'] = $sidebar->getContent();
		$parametres['etudiant'] = $sidebar->getDerniersInscrits();
		$parametres['entreprise'] = $sidebar->getInfosEntreprise();
		
		$recup = $this->getRepository('ToolsBox'); // pour obtenir la classe
		return $this->render('toolsBox', $parametres);
	}
}