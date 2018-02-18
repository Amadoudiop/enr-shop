$(document).ready(function() {
	var $specialSlideConf = $('.pos-special-products');
	var items       = parseInt($specialSlideConf.attr('data-items'));
	var speed     	= parseInt($specialSlideConf.attr('data-speed'));
	var autoPlay    = parseInt($specialSlideConf.attr('data-autoplay'));
	var time    	= parseInt($specialSlideConf.attr('data-time'));
	var arrow       = parseInt($specialSlideConf.attr('data-arrow'));
	var pagination  = parseInt($specialSlideConf.attr('data-pagination'));
	var move        = parseInt($specialSlideConf.attr('data-move'));
	var pausehover  = parseInt($specialSlideConf.attr('data-pausehover'));
	var md          = parseInt($specialSlideConf.attr('data-md'));
	var sm          = parseInt($specialSlideConf.attr('data-sm'));
	var xs          = parseInt($specialSlideConf.attr('data-xs'));
	var xxs         = parseInt($specialSlideConf.attr('data-xxs'));
	
	if(autoPlay==1) {
		if(time){
			autoPlay = time;
		}else{
			autoPlay = '3000';
		}
	}else{
		autoPlay = false;
	}
	if(pausehover){pausehover = true}else{pausehover=false}
	if(move){move = false}else{move=true}
	if(arrow){arrow =true}else{arrow=false}
	if(pagination==1){pagination = true}else{pagination=false}

	var specialSlide = $(".pos-special-products .special-item");
	specialSlide.owlCarousel({
		items :items,
		itemsDesktop : [1199,md],
		itemsDesktopSmall : [991,sm],
		itemsTablet: [767,xs],
		itemsMobile : [480,xxs],
		autoPlay : autoPlay ,
		slideSpeed: speed,
		stopOnHover: pausehover,
		addClassActive: true,
		scrollPerPage: move,
		navigation : arrow,
		pagination : pagination,
	});
});
