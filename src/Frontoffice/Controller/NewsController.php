<?php namespace Frontoffice\Controller;
class NewsController extends \Controller\Controller {

	static protected $news = false;
	public function __construct() {
		if (!self::$news) {
			self::$news = $this->getRepository('News');
		}
	}


	public function newsDisplay() {
		$sidebar = new SidebarController();
		$parametres = array();
		$parametres['title'] = 'Actualité';

		$parametres['offre'] = $sidebar->getContent();
		$parametres['etudiant'] = $sidebar->getDerniersInscrits();
		$parametres['entreprise'] = $sidebar->getInfosEntreprise();

		$recup = $this->getRepository('News');

		$news = $recup->displayAllNews();
		$parametres['allNews'] = $news;

		return $this->render('news', $parametres);
	}

	public function newsDetailDisplay() {
		$sidebar = new SidebarController();
		$parametres = array();
		$parametres['title'] = 'Actualité';

		$parametres['offre'] = $sidebar->getContent();
		$parametres['etudiant'] = $sidebar->getDerniersInscrits();
		$parametres['entreprise'] = $sidebar->getInfosEntreprise();
		 
		if(!empty($_GET['id'])) { 
			$afficheDetailNews = $this->showDetailNews($_GET['id']);
			$parametres['news_detail'] = $afficheDetailNews;
			return $this->render('news_detail', $parametres);
		} else header('location: news.php');
	}

	public function showDetailNews($id) {
	return self::$news->getDetailNews($id);	
	}

}