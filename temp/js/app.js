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

	},
	scrollTop: function() {
		console.info("app.scrollTop");

		$("a[href='#']").click(function() {
			$("html, body").animate({ scrollTop: 0 }, "slow");
			return false;
		});
	}
};



/*
 * Chargement du DOM
 */
$(function() {
	app.init();
});