<?php namespace Backoffice\Controller;

class AdminNewsController extends \Controller\Controller {

	protected $setNews;

	public function __construct() {
		$this ->setNews = $this->getRepository('News');		
	}

	public function newsDisplay() {
		$parametres = array();
		$parametres['titre'] = 'Gestion News';
		$recup = $this->getRepository('News');

		$parametres['msg'] = '';

		/* Supprimer une news */
		if(isset($_GET['action']) && isset($_GET['id']) ) {

			if ($_GET['action'] == "supprimer") {
				$suppression = $this->prepareDeleteNews($_GET['id']);
			}

			$verification = $recup->deleteNews($_GET['id']);
			if ($verification == "deleted") {
				$parametres['msg'] .= '<p class="alert alert-success" role="alert"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> L\'actualité avec l\'id n°'.$_GET['id'].' a été supprimé avec succès !</p>';
			}
		}
		
		$actualites = $recup->getAllNews();
		$parametres['actualites'] = $actualites;		

		if (!empty($_SESSION['user']) && $_SESSION['user']['admin'] == 1) {
			return $this->render('admin_news', $parametres);	
		} else {
			header('location: index.php');	
		}

	}

	public function prepareDeleteNews($id) {
		return $this->setNews->deleteNews($id);
	}
}