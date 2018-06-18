<?php namespace Frontoffice\Controller;
class OffreController extends \Controller\Controller { 
	static protected $depotOffre = false;
	public function __construct() {
		if(!self::$depotOffre) {
			self::$depotOffre = $this->getRepository('Offre'); // pour obtenir la classe OffreRepository qui me permet de récuperer ses méthodes pour requetes en BDD
		}
	}

	public function depotOffreDisplay() {
		$sidebar = new SidebarController();
		$parametres = array();
		$parametres['title'] = 'Déposer une offre d\'emploi ou de stage';

		$parametres['offre'] = $sidebar->getContent();
		$parametres['etudiant'] = $sidebar->getDerniersInscrits();
		$parametres['entreprise'] = $sidebar->getInfosEntreprise();

		if(isset($_POST['valider'])) {
			$insertion = $this->setOffre($_POST);
			if($insertion > 0) {
				$parametres['message'] = '<p class="success bg-success" role="success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Insertion OK</p>';
			} else {
				$parametres['message'] = '<p class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>Erreur d\'insertion</p>';
			}
			$parametres['message'] = $this -> checkDownloadFileOffre($file);

		}		
		return $this->render('depot_offre', $parametres);
	}

	public function checkDownloadFileOffre($file) {
		$file = 'offre_fichier';
		$msgCheckFile = $this->checkDownloadFiles($file);
		return $msgCheckFile;

	}
	
	public function setOffre(Array $infos) {
		$infos['offre_fichier'] = $_FILES['offre_fichier']['name'];
		return self::$depotOffre->registerOffre($infos);
	}

	public function offresDisplay() {
		$sidebar = new SidebarController();
		$parametres = array();
		$parametres['title'] = 'Liste des offres';

		$parametres['offre'] = $sidebar->getContent();
		$parametres['etudiant'] = $sidebar->getDerniersInscrits();
		$parametres['entreprise'] = $sidebar->getInfosEntreprise();

		$afficheOffres = $this ->showAllOffers();
		$parametres['gallery'] = $afficheOffres;
		$afficheInfosEntreprise = $this -> showInfosEntreprise();
		$parametres['infos_entreprise'] = $afficheInfosEntreprise;
		return $this->render('offres', $parametres);
	}

	public function offreDetailDisplay() { // méthode permettant l'affichage d'une offre à partir de la liste des offres
		$sidebar = new SidebarController();
		$parametres = array();
		$parametres['title'] = 'Offre'; // titre de ma page

		$parametres['offre'] = $sidebar->getContent();
		$parametres['etudiant'] = $sidebar->getDerniersInscrits();
		$parametres['entreprise'] = $sidebar->getInfosEntreprise();
		
		if(!empty($_GET['id_offre'])) { 
			$afficheDetailOffre = $this->showDetailOffre($_GET['id_offre']); //je stock la demande de l'utilisateur
			$parametres['offre_detail'] = $afficheDetailOffre;
			$afficheDetailEntreprise = $this->showDetailEntreprise($parametres['offre_detail']['id_entreprise']);
			$parametres['entreprise_detail'] = $afficheDetailEntreprise;
			return $this->render('offre_detail', $parametres);
		} else header('location:offres.php');
	}

	public function showDetailOffre($id) { // je crée une méthode pour pouvoir utiliser ma méthode de offreRepository à l'interieur de ma méthode offreDetailDisplay()
	return self::$depotOffre->getDetailOffre($id);	
	}

	public function showDetailEntreprise($id) {
		return self::$depotOffre->getDetailEntreprise($id);
	}

	public function showAllOffers() {
		return self::$depotOffre->selectAllOffers();
	}

	public function showInfosEntreprise() {
		return self::$depotOffre->selectEntreprise();
	}
}