<?php
class Autoload {
	static $declenchement = 0;
	static public function inclusionAuto($inclusion) { // methode static pour pouvoir l'inclure dans spl_autoload_register()

		self::$declenchement++;
		$chemin = __DIR__ . '/' . $inclusion; // je prepare mon chemin d'inclusion
		$chemin = str_replace('\\', '/', $chemin); // je remplace tous les separateurs pour avoir des separateurs normaux

		// si mon chemin contient le namespace BackOffice alors je remplace vendor par src
		if(preg_match('/Backoffice/', $chemin) || preg_match('/Frontoffice/', $chemin)) 
			$chemin = preg_replace('/vendor/', 'src', $chemin);
		
		$chemin = $chemin . '.php';
		// echo 'Déclenchement n° ' . self::$declenchement . ' : ' . $inclusion . '<br>';
		// echo 'Chemin : ' . $chemin . '<hr>';

		include($chemin);
	}
}

spl_autoload_register(array('Autoload','inclusionAuto')); // enregistre une fonction qui se declenche à chaque fois que j'appelle une classe, SAUF les classes prédéfinies (PDO etc ...)
// dans ce cas précis, la fonction enregistrée qui sera appelée à chaque appel de classe est "inclusionAuto", une fonction de ma concoction. DU FAIT que cette fonction se trouve dans une classe, (c'est donc une méthode) je dois obligatoirement indiqué quelle est la classe qui la contient (sous forme array('NOM_DE_MA_CLASSE', 'METHODE_DE_MA_CLASSE' )). ET ce doit être obligatoirement une méthode STATIQUE

/*
$u = new Application\User; // tester l'autoload 
*/