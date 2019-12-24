$('.owl-carousel').owlCarousel({
	autoplay:true,
	margin:20,
	stagePadding:0,
	nav: true,
	//autoWidth: true,
	loop:true,
	responsiveClass:true,
	responsive:{
		0: {
			items:1,
		},
		485: {
			items:2,
		},
		768: {
			items:3,
		},
		992: {
			items:4,
		},
	},
	
});

$('.owl-carousel').on('mousewheel','.owl-stage', function(e){
	if(e.deltaY>0){
		$('.owl-carousel').trigger('next.owl');
	} else {
		$('.owl-carousel').trigger('prev.owl');
	}
	e.preventDefault();
});