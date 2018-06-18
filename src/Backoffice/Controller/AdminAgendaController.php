<?php namespace Backoffice\Controller;
class AdminAgendaController extends \Controller\Controller {

	public function agendaDisplay() {
		$parametres = array();
		$parametres['titre'] = 'Gestion Agenda';
		$recup = $this->getRepository('Agenda');	

		if (!empty($_SESSION['user']) && $_SESSION['user']['admin'] == 1) {
			return $this->render('admin_agenda', $parametres);	
		} else {
			header('location: index.php');	
		}		

	}
}