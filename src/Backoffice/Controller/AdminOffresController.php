<?php namespace Backoffice\Controller;
class AdminOffresController extends \Controller\Controller {

	public function offresDisplay() {
		$parametres = array();
		$parametres['titre'] = 'Gestion Offre';
		$recup = $this->getRepository('Offre');

		$parametres['msg'] = '';

		/* Supprimer une news */
		if(isset($_GET['action']) && isset($_GET['id']) ) {

			if ($_GET['action'] == "supprimer") {
				$suppression = $this->prepareDeleteOffre($_GET['id']);
			}

			$verification = $recup->deleteOffre($_GET['id']);
			if ($verification == "deleted") {
				$parametres['msg'] .= '<p class="alert alert-success" role="alert"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> L\'offre avec l\'id n°'.$_GET['id'].' a été supprimé avec succès !</p>';
			}
		}

		$offres = $recup->getAllOffre();
		$parametres['offres'] = $offres;		

		if (!empty($_SESSION['user']) && $_SESSION['user']['admin'] == 1) {
			return $this->render('admin_offres', $parametres);	
		} else {
			header('location: index.php');	
		}		

	}
}