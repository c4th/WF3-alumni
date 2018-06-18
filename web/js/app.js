/*
 * Modules
 */

app = {

	/*
	 * Chargement du DOM
	 */
	init: function() {
		console.info("app.init");
		
		app.scrollTop();
		app.addLangage(); 
	},

	scrollTop: function() {
		console.info("app.scrollTop");

		$("a[href='#']").click(function() {
			$("html, body").animate({ scrollTop: 0 }, "slow");
			return false;
		});
	},

	langagesSupActuels : 1,

	 addLangage: function (){
		console.info("app.addLangage");

		$("#ajoutLangage").on("click", function() {
			console.info("Ajout Langage");		

			if(app.langagesSupActuels < 5) { // Maximum 4 langages supplémentaires

				var id = '#emplacementLangageSup';

				var idTotal = id + app.langagesSupActuels; // Ex : emplacementLangageSup1

				var langageSup = "<td id=\"nouveauLangage"+app.langagesSupActuels+"\"><input type=\"text\" name=\"optionnalLangage\" placeholder=\"Langage\"></td>";
				$(idTotal).append(langageSup);


				console.log(langageSup);

				for($i=5; $i>0;$i--) {
				var nouveaulangageSup = "<td><label class=\"radio-inline\"><input type=\"radio\" name=optionnalLangage\" id=PHP"+$i+"\" value=\""+$i+"\">"+$i+"</label></td>";
				$(nouveaulangageSup).insertAfter("#nouveauLangage"+app.langagesSupActuels) ;


				} 

				app.langagesSupActuels++; 
			;}
		});	
	},

};



/*
 * Chargement du DOM
 */
$(function() {
	app.init();
});