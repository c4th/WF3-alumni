<?php namespace Frontoffice\Controller;

class EtudiantController extends \Controller\Controller { 
	protected $setEtudiant; // on définit un objet utilisable plusieurs fois dans plusieurs méthodes
	protected $getEtudiant;
	protected $setMail;
	protected $getAllStudents;
	protected $updateInfosEtudiant;
	protected $etudiantsAleatoire;

	public function __construct() { // fonction permettant de définir à quoi correspond le $this d'une méthode
		$this ->setEtudiant = $this->getRepository('Etudiant');
		$this->getEtudiant = $this->getRepository('Etudiant');
		$this->setMail = $this->getRepository('Etudiant');
		$this->getAllStudents = $this->getRepository('Etudiant');
		$this->updateInfosEtudiant = $this->getRepository('Etudiant');
		$this->etudiantsAleatoire = $this->getRepository('Etudiant');
	}

	public function modifProfilDisplay() {
		$sidebar = new SidebarController();
		$parametres = array();
		$parametres['title'] = 'Modifier votre profil';

		$parametres['offre'] = $sidebar->getContent();
		$parametres['etudiant'] = $sidebar->getDerniersInscrits();
		$parametres['entreprise'] = $sidebar->getInfosEntreprise();
		$parametres['msg'] = '';

		if(isset($_POST['modifProfilValidate'])){ // EN CAS DE VALIDATION DU FORMULAIRE

			extract($_POST);
			// PLACER ICI LES VERIFICATIONS SUR LE FORMULAIRE
			if( empty($prenom) || empty($nom) || empty($ville) || empty($poste) ) {
				$parametres['msg'] .='<p class="erreur_saisie"><span>!</span>Vous devez remplir tous les champs marqués d\'une étoile !</p>';
			} elseif ( strlen($prenom) < 3 || preg_match('/[0-9]/', $prenom) || strlen($nom) < 3 || preg_match('/[0-9]/', $nom) || strlen($ville) < 3 || preg_match('/[0-9]/', $ville) || strlen($poste) < 3 || preg_match('/[0-9]/', $poste) ) {
				$parametres['msg'] .='<p class="erreur_saisie"><span>!</span>Les champs "Nom", "Prénom", "Ville" et "Poste" doivent contenir au moins 3 caractères sans aucun chiffre !</p>';
			} elseif ( !empty($presentation) && strlen($presentation) > 1200) {
				$nb = strlen($presentation) ;
				$parametres['msg'] .='<p class="erreur_saisie"><span>!</span>Votre texte descriptif est trop long ( '.$nb.' caractères pour un max de 1200) !</p>';
			}


			else {

				$this->setModifProfil($_POST); // Je remplace les infos en BDD par celles passées dans le formulaire
				
				if(isset($photo)) { // Si la photo n'a pas été remplacée, on garde l'ancienne. ATTENTION, A REMPLACER LORS DE L'UPLOAD DE PHOTOS
					$photo =  $_SESSION['user']['photo'];
				}

				foreach($_POST as $key => $value){ // Je remplis le $_SESSION avec les infos du $_POST
					$_SESSION['user'][$key] = $value;
				}  
				
				header('location: etudiant.php?id_etudiant='.$_POST['id_etudiant']);
				exit();
			}

			// return $this->render('modifProfil', $parametres); 	

		}
		

		if(isset($_GET['id_etudiant'])) {  // EN CAS DE CONSULTATION DE LA PAGE
				$afficheInfosEtudiant = $this-> setInfosEtudiant($_GET['id_etudiant']); // On récupère les infos liée à l'id en BDD.
				if($_GET['id_etudiant'] == $_SESSION['user']['id_etudiant']) { // Si l'ID de l'url correspond à l'ID de $_SESSION 
					if(!empty($afficheInfosEtudiant)) {  
						$parametres['infosEtudiant'] = $afficheInfosEtudiant; // On récupère les infos liées à l'ID passée en url
						return $this->render('modifProfil', $parametres); // On affiche la page modifProfil
					} else {
					  header('location: annuaire_etudiants.php'); 
					}
				} else {
				  header('location: annuaire_etudiants.php'); 
				}
		} else {
		 header('location: annuaire_etudiants.php'); 
		} 
	}

	public function setModifProfil($infos) {
		return $this->updateInfosEtudiant->updateInfosEtudiant($infos);
	}

	public function etudiantDisplay() {
		/* if(isset($_GET['id_etudiant'])) { */
		$sidebar = new SidebarController();
		$parametres = array();
		$parametres['title'] = 'Etudiant';

		$parametres['offre'] = $sidebar->getContent();
		$parametres['etudiant'] = $sidebar->getDerniersInscrits();
		$parametres['entreprise'] = $sidebar->getInfosEntreprise();

		if(!empty($_GET['id_etudiant'])) {
			$afficheInfosEtudiant = $this-> setInfosEtudiant($_GET['id_etudiant']);

			if(!empty($afficheInfosEtudiant)) {
			$parametres['infosEtudiant'] = $afficheInfosEtudiant;
			return $this->render('etudiant', $parametres); 	
			}		
			else header('location: annuaire_etudiants.php');
		}
		else header('location: annuaire_etudiants.php');
	}

	
	public function setInfosEtudiant($id) {
		return $this->getEtudiant->getInfosEtudiant($id);
	}
	
	public function annuaireEtudiantsDisplay() {
		$sidebar = new SidebarController();
		$parametres = array();
		$parametres['title'] = 'Annuaire Etudiants';

		$parametres['offre'] = $sidebar->getContent();
		$parametres['etudiant'] = $sidebar->getDerniersInscrits();
		$parametres['entreprise'] = $sidebar->getInfosEntreprise();

		$afficheEtudiants = $this ->showAllStudents();
		$parametres['gallery'] = $afficheEtudiants;
		return $this->render('annuaire_etudiants', $parametres);
	}

	public function inscriptionDisplay() { // méthode permettant l'insciption d'un étudiant dans la BDD
		$sidebar = new SidebarController();
		$parametres = array();
		$parametres['title'] = 'Inscription';

		$parametres['offre'] = $sidebar->getContent();
		$parametres['etudiant'] = $sidebar->getDerniersInscrits();
		$parametres['entreprise'] = $sidebar->getInfosEntreprise();
		$parametres['photo'] = $this->showEtudiantRand();
		$parametres['msg'] = '';
		$parametres['verif'] = '';
		
		if(isset($_POST['valider'])) { 
			extract($_POST);
			if(empty($prenom) || empty($nom) || empty($email) || empty($password) ) {
				$parametres['msg'] .='<p class="erreur_saisie"><span>!</span>Vous devez remplir tous les champs du formulaire !</p>';
			} elseif ( (strlen($prenom) < 3) || (preg_match('/[0-9]/', $prenom)) || (strlen($nom) < 3) || (preg_match('/[0-9]/', $nom)) ) {
				$parametres['msg'] .='<p class="erreur_saisie"><span>!</span>Les champs "Nom" et "Prénom" doivent contenir au moins 3 caractères sans aucun chiffre !</p>';
			} elseif (!preg_match('/^[a-z0-9]+([._-]?[a-z0-9]+)*'.'@'.'[a-z0-9]+([.-]?[a-z0-9]+)*\.[a-z]{2,4}$/i',$email)) {
				$parametres['msg'] .= '<p class="erreur_saisie"><span>!</span>Votre adresse mail ou votre mot de passe est invalide !</p>';
			} elseif (strlen($password) < 8 || !preg_match('/([a-zA-Z]+[0-9]+[!@%^&*\-_=+()\#{};:,<.>]{2,})/',$password) ) {
				$parametres['msg'] .= '<p class="erreur_saisie"><span>!</span>Votre mot de passe n\'est pas valide !</p>';
			} elseif ($password != $password2) {
				$parametres['msg'] .= '<p class="erreur_saisie"><span>!</span>Votre mot de passe ne correspond pas !</p>';
			} else {
			$verification = $this->verifMailInscription($_POST['email']);
				if($verification == 'emailExistant') {
					$parametres['msg'] .='<p class="erreur_saisie"><span>!</span>Votre adresse mail existe déjà !</p>';
					$parametres['verif'] = $verification;
				} else {
					$insertion = $this->setInscriptionEtudiant($_POST); // permet de faire passer le $_POST dans le $infos Ligne 60
					$parametres['msg'] .= '<p class="validation_saisie"><span>&radic;</span>Votre inscription a bien été validée !</p>';
				} 
			}
		}
				return $this->render('inscription', $parametres); 				
	}

	public function setInscriptionEtudiant(Array $infos) { // méthode permettant de passer le param $infos dans le register de EtudiantRepository
		return $this->setEtudiant->registerEtudiant($infos); //$this correspond au setEtudiant
	}

	public function verifMailInscription($email) {
		return $this->setMail->verifMail($email);
	}
	
	public function showAllStudents() {
		return $this->getAllStudents->selectAllStudents();
	}

	//
	public function showEtudiantRand() {
		$parametres = array();
		$parametres['title']="inscription";
		$recup=$this->getRepository('Etudiant');
		$etudiants=$recup->inscritsAleatoire();
		return $etudiants;	
	}

}