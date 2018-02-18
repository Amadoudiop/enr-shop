jQuery(document).ready(function($) {  
	var blog = $(".blog_slider");
		blog.owlCarousel({
		items : 4,
		slideSpeed: 1000,
		itemsDesktop : [1600,3],
		itemsDesktopSmall : [991,2],
		itemsTablet: [767,2],
		itemsMobile : [480,1],
		navigation:true,
		pagination :false,
	}); 
});