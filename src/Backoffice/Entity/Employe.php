<?php
namespace BackOffice\Entity;
class Employe {
	//---- Properties ---- //
	private $idEmploye;
	private $prenom;
	private $nom;
	private $sexe;
	private $service;
	private $dateEmbauche;
	private $salaire; // oubli volontaire de $idSecteur 

	public function __construct() {

	}

	//---- Getters ------ //
	public function getIdEmploye(){
		return $this->idEmploye;
	}

	public function getPrenom(){
		return $this->prenom;
	}

	public function getNom(){
		return $this->nom;
	}

	public function getSexe(){
		return $this->sexe;
	}

	public function getService(){
		return $this->service;	
	}

	public function getdateEmbauche(){
		return $this->dateEmbauche;	
	}

	public function getSalaire(){
		return $this->salaire;	
	}

	public function getI     dSecteur(){
		return $this->idSecteur;	
	}

	//---- Setters ------ //

	public function setIdEmploye($arg){
		$this->idEmploye = $arg;
	}

	public function setPrenom($arg){
		$this->prenom = $arg;
	}

	public function setNom($arg){
		$this->nom = $arg;
	}

	public function setSexe($arg){
		$this->sexe = $arg;
	}

	public function setService($arg){
		$this->service = $arg;
	}

	public function setdateEmbauche($arg){
		$this->dateEmbauche = $arg;
	}

	public function setSalaire($arg){
		$this->salaire = $arg;
	}

	public function setIdSecteur($arg){
		$this->idSecteur = $arg;
	}


}