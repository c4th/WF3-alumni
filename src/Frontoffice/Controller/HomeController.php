<?php namespace Frontoffice\Controller;
class HomeController extends \Controller\Controller {

	static protected $home;
	public function __construct() {
		$this::$home = $this->getRepository('Home');
	}

	public function homeDisplay() {
		$sidebar = new SidebarController();

		$parametres = array();

		$parametres['title'] = 'Accueil';
		$parametres['offre'] = $sidebar->getContent();
		$parametres['etudiant'] = $sidebar->getDerniersInscrits();
		$parametres['entreprise'] = $sidebar->getInfosEntreprise();

		$recup = $this->getRepository('Home');

		// Affiche les actualités les plus récentes
		$actualites = $recup->displayActualites();
		$parametres['actualite'] = $actualites;

		// Gestion du mini formulaire de connexion
		$parametres['msg'] = '';
		if(isset($_POST['connecter'])) {
			extract($_POST);

			if( isset($connexion_email) && isset($connexion_mdp) ) {
				// appel à la base de données
				$connexion = $this->setConnexion($connexion_email, $connexion_mdp
					);

				$verification = $this->setConnexion($_POST['connexion_email'], $_POST['connexion_mdp']);

				if ($verification == 'noconnect') { // si la connexion échoue
					$parametres['msg'] .= '<p class="text-danger">Identifiants non-valides</p>';
				} else { // quand la connexion est réussie
					$parametres['msg'] .= '<p class="text-success">Connexion réussie !</p>';
					$infos_connexion = $recup->getConnexionInfos($connexion_email, $connexion_mdp);					
					$parametres['infos'] = $infos_connexion;

					$_SESSION['user']['nom'] = $parametres['infos']['nom'];
					$_SESSION['user']['prenom'] = $parametres['infos']['prenom'];
					$_SESSION['user']['id_etudiant'] = $parametres['infos']['id_etudiant'];
					$_SESSION['user']['admin'] = $parametres['infos']['admin'];
				}
			}
		}

		// Gestion du bouton de déconnexion
		if (isset($_GET['action']) && $_GET['action'] == "deconnecter") {
				session_destroy();
				header('location: index.php');
				exit();
		}
		return $this->render('accueil', $parametres);		
	}

	public function setConnexion($connexion_email, $connexion_mdp) {
		return $this::$home->getConnexionInfos($connexion_email, $connexion_mdp);
	}


	public function showProfil() {		
		$parametres = array();
		$parametres['title'] = 'Profil';

		if(!empty($_GET['id_etudiant'])) { 
			$afficheProfil = $this->getEtudiantProfil($_GET['id_etudiant']);
			$parametres['etudiant'] = $afficheProfil;
			return $this->render('etudiant', $parametres);
		} else header('location: annuaire_etudiant.php');
	}

	public function showEtudiantProfil($id) {
		return self::$home->getEtudiantProfil($id);	
	}

}