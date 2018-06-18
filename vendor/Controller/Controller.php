<?php namespace Controller; // ce fichier contient le controlleur general de notre application, il assure le dispatch entre le modele (pour les requetes) et la vue (pour l'affichage)
class Controller {
	protected $tableRepository;
	protected $nomTable = array();
	//---------------
	public function __construct() {}
	//---------------
	public function getRepository($table) { // methode qui fera appel à ma couche modele (EntityRepository)
		
		$ns = explode('\\', get_called_class());
		$class = '\\'.$ns[0].'\Repository\\' . $table . 'Repository';
		// au 1er appel de getRepository() je rentre dans le IF mais pas au second appel
		if(empty($this->tableRepository) || array_search($table, $this->nomTable) === false) {
			$this->tableRepository = new $class;
			$this->nomTable[] = $table;
		}
			// je veux instancier \BackOffice\Repository\EmployeRepository UNE SEULE FOIS
		return $this->tableRepository; 
	}
	//--------
	public function render($template, $parameters = array()) { // array() pour avoir des arguments infinis
		// 1 recuperons le chemin qui mene au dossier des templates
		//echo get_called_class() . '<hr>';
		$ns = explode('\\', get_called_class());
		//echo '<pre>';
		//print_r($ns);
		//echo '</pre>';
		//$dossierTemplate = str_replace('controller', '', strtolower($ns[2])); 
		$ns = $ns[0]; // je recuperer le namespace concerné 
		$chemin = strtolower(__DIR__);
		$chemin = str_replace('controller', '', $chemin); 
		$chemin = str_replace('vendor', 'src', $chemin);
		$chemin = str_replace('\\', '/', $chemin);

		// transformer ceci : 
		// C:\xampp\htdocs\php\07_PHPOO\09_projet_framework\vendor\Controller
		// en ceci : 
		// C:\xampp\htdocs\php\07_PHPOO\09_projet_framework\src\BackOffice\Views\employe
		$cheminTemplate =  $chemin . $ns . '/Views/' . $template . '.php';
		$cheminLayout = $chemin . $ns . '/Views/' . 'layout.php';
		$cheminSidebar = $chemin . $ns . '/Views/' . 'sidebar.php';

		$content = $cheminTemplate; 
		$sidebar = $cheminSidebar;

		require($cheminLayout);
	}

	public function checkExtensionDoc($file) {
		$extension = strRchr($_FILES[$file]['name'], '.'); // strRchr() trouve le dernier caractère indiqué, et donne la chaine de caractère à partir de ce qu'on lui a indiqué (ici un point) 
		//debug($extension);
		$extension = strToLower($extension); // passage en minuscule 
		$extension = subStr($extension, 1); // on enlève le point
		$docExtensionOk = array('pdf', 'txt', 'doc', 'docx');
		$checkExtensionDoc = in_array($extension, $docExtensionOk);// nous verifions si l'extension est présente dans notre tableau 
		return $checkExtensionDoc;// nous retournons TRUE ou FALSE (true si l'extension est présente dans notre tableau, false si elle n'est pas présente )
	}

	public function checkExtensionPic($file) {
		$extension = strRchr($_FILES[$file]['name'], '.'); // strRchr() trouve le dernier caractère indiqué, et donne la chaine de caractère à partir de ce qu'on lui a indiqué (ici un point) 
		//debug($extension);
		$extension = strToLower($extension); // passage en minuscule 
		$extension = subStr($extension, 1); // on enlève le point
		$picExtensionOk = array('jpg', 'jpeg', 'png', 'gif');
		$checkExtensionPic = in_array($extension, $picExtensionOk);// nous verifions si l'extension est présente dans notre tableau 
		return $checkExtensionPic;// nous retournons TRUE ou FALSE (true si l'extension est présente dans notre tableau, false si elle n'est pas présente )
	}

	public function checkDownloadFiles($file) {
		$msgCheckFile = '';
		if ($_FILES[$file]['error']) {
			switch ($_FILES[$file]['error']) {
				case 1: // UPLOAD_ERR_INI_SIZE
					$msgCheckFile .= 'La taille du fichier est plus grande que la limite autorisée par le serveur (paramètre upload_max_filesize du fichier php.ini).';
						break;
				case 2: //UPLOAD_ERR_FORM_SIZE
					$msgCheckFile .= 'La taille du fichier est plus grande que la limite autorisée (paramètre post_max_filesize du fichier php.ini).';
						break;
				case 3: // UPLOAD_ERR_PARTIAL
					$msgCheckFile .= 'L\'envoi du fichier a été interrompu durant le transfert.';
						break;
				case 4: //UPLOAD_ERR_NO_FILE
					$msgCheckFile .= 'La taille du fichier que vous avez envoyé est nulle.';
						break;
			}
		}
		else {
			// s'il n'y a pas d'erreur alors $_FILES['nom_du_fichier']['error'] vaut 0
			$msgCheckFile .= 'Votre fichier a bien été enregistré.<br/>';
			if ((isset($_FILES[$file]['name']) && ($_FILES[$file]['error'] == UPLOAD_ERR_OK))) {
				$isDoc = $this->checkExtensionDoc($file);
				$isPic = $this->checkExtensionPic($file);
				if($isDoc) {
					$fileDestination = dirname(dirname(dirname(__FILE__))).'/src/Frontoffice/Views/doc/';
				}
				if($isPic) {
					$fileDestination = dirname(dirname(dirname(__FILE__))).'/src/Frontoffice/Views/photos/';
				}
				move_uploaded_file($_FILES[$file]['tmp_name'], $fileDestination.$_FILES[$file]['name']);
				$msgCheckFile .= 'Le fichier '.$_FILES[$file]['name'].' a été copié dans le répertoire'.$fileDestination.'.';			
			}
			else {
				$msgCheckFile .= 'Le fichier n\'a pas pu être copîé dans le répertoire photos.';
			}
		}
		return $msgCheckFile;

	}

/*
	public function CheckDownloadFiles($file) {

		if ($_FILES['$file']['error']) {
			switch ($_FILES['$file']['error']) {
				case 1: // UPLOAD_ERR_INI_SIZE
					echo 'La taille du fichier est plus grande que la limite autorisée par le serveur (paramètre upload_max_filesize du fichier php.ini).';
						break;
				case 2: //UPLOAD_ERR_FORM_SIZE
					echo 'La taille du fichier est plus grande que la limite autorisée (paramètre post_max_filesize du fichier php.ini).';
						break;
				case 3: // UPLOAD_ERR_PARTIAL
					echo 'L\'envoi du fichier a été interrompu durant le transfert.';
						break;
				case 4: //UPLOAD_ERR_NO_FILE
					echo 'La taille du fichier que vous avez envoyé est nulle.';
						break;
			}
		}
		else {
			// s'il n'y a pas d'erreur alors $_FILES['nom_du_fichier']['error'] vaut 0
			echo 'Votre fichier a bien été enregistré.<br/>';
			if ((isset($_FILES['$file']['name']) && ($_FILES['']['error'] == UPLOAD_ERR_OK))) {
				$chemin_destination ='photos/'; //déplacement du fichier du répertoire temporaire (stocké par défaut) dans le répertoire de destination
				$chemin_destination ='photos/'; 
				//move_uploaded_file(filename, destination)
				move_uploaded_file($_FILES['$file']['tmp_name'], $chemin_destination.$_FILES['$file']['name']);
				echo 'Le fichier '.$_FILES['$file']['name'].' a été copié dans le répertoire photos';
			}
			else {
				echo 'Le fichier n\'a pas pu être copîé dans le répertoire photos.';
			}
		}

	}

*/

}
