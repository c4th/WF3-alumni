<?php namespace Frontoffice\Controller;
class ForumController extends \Controller\Controller { 
	public function ForumDisplay() {
		$sidebar = new SidebarController();
		$parametres = array();
		$parametres['title'] = 'Forum';

		$parametres['offre'] = $sidebar->getContent();
		$parametres['etudiant'] = $sidebar->getDerniersInscrits();
		$parametres['entreprise'] = $sidebar->getInfosEntreprise();

		$recup = $this->getRepository('Forum'); // pour obtenir la classe HomeRepository 
		/*$univers = $recup->getUnivers(); // ceci est une méthode de HomeRepository*/
		return $this->render('forum_accueil', $parametres);
	}

public function ForumSujetsDisplay() {
		$sidebar = new SidebarController();
		$parametres = array();
		$parametres['title'] = 'Forum : sujets';

		$parametres['offre'] = $sidebar->getContent();
		$parametres['etudiant'] = $sidebar->getDerniersInscrits();
		$parametres['entreprise'] = $sidebar->getInfosEntreprise();

		$recup = $this->getRepository('Forum'); // pour obtenir la classe HomeRepository 
		/*$univers = $recup->getUnivers(); // ceci est une méthode de HomeRepository*/
		return $this->render('forum_sujets', $parametres);
	}

public function ForumPostDisplay() {
		$sidebar = new SidebarController();
		$parametres = array();
		$parametres['title'] = 'Forum : post';

		$parametres['offre'] = $sidebar->getContent();
		$parametres['etudiant'] = $sidebar->getDerniersInscrits();
		$parametres['entreprise'] = $sidebar->getInfosEntreprise();

		$recup = $this->getRepository('Forum'); // pour obtenir la classe HomeRepository 
		/*$univers = $recup->getUnivers(); // ceci est une méthode de HomeRepository*/
		return $this->render('forum_post', $parametres);
	}

}