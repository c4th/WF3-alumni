/*
 * Modules
 */

appTabs = {

	/*
	 * Chargement du DOM
	 */
	init: function() {
		console.info("appTabs.init")

		// jQuery UI
		$("#tabs").tabs()
	},

}





/*
 * Chargement du DOM
 */
$(function() {
	appTabs.init()
})