
/** 
	* Filename:     custom.js
	* Version:      1.0.0 (04 Oct 2021)
					1.0.2 (2024-01-09)
	* Website:      https://www.zymphonies.com
	* Description:  Global script
	* Author:		Zymphonies team
					info@zymphonies.com
**/

function themeMenu(){

	jQuery('#main-menu').smartmenus();

	jQuery('.navbar-toggle').click(function(){
		jQuery('.main-container').toggleClass('expand-menu');
	});

	if ( jQuery(window).width() < 767) {
		jQuery(".region-primary-menu li a:not(.has-submenu)").click(function () {
			jQuery('.region-primary-menu').hide();
		});
	}

}

function themeHome(){
	jQuery('.flexslider').flexslider({
    	animation: "slide"	
    });
}

jQuery(document).ready(function($){
	themeMenu();
	themeHome();
});