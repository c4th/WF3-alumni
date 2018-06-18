/*
 * Modules
 */

app = {

	/*
	 * Chargement du DOM
	 */
	init: function() {
		console.info("app.init");
		
		app.activeLink();
	},

	activeLink: function() {
		console.info("app.activeLink");

		var data = [
		    {id: 'admin_index', page: 'admin_index.php'},
		    {id: 'admin_news', page: 'admin_news.php'},
		    {id: 'admin_agenda', page: 'admin_agenda.php'},
		    {id: 'admin_etudiants', page: 'admin_etudiants.php'},
		    {id: 'admin_entreprises', page: 'admin_entreprises.php'},
		    {id: 'admin_offres', page: 'admin_offres.php'},
		];

		// récupérer l'URL de la page
		var mapage = location.href.substring(location.href.lastIndexOf("/")+1); // Parser l'URL pour récupérer la partie .php

		// Parcourir le tableau JS pour retrouver l'ID correspondant à la bonne page
		for(i = 0; i < data.length; i++) {
		    if (data[i].page == mapage) {
		        $(".side-nav li").removeClass("active");
		        $('.side-nav a#' + data[i].id).parent().addClass("active");
		        return;
		    }
		}
		


	}
};



/*
 * Chargement du DOM
 */
$(function() {
	app.init();
});