$(function(){

	let path = window.location.pathname;
	let currentPage = path.substring(path.lastIndexOf('/')+1);

	if(currentPage.length == 0) {
		currentPage = 'index.php';
	}

	$('.navbar .nav-link').removeClass('active');

	$('.navbar .nav-link').each(function(element, index){
		
		let route = $(this).attr('href');

		if(route.lastIndexOf(currentPage) > 0){
			$(this).addClass('active');

			let firstParent = $(this).parent('.nav-collapse');
			firstParent.removeClass('collapse');

			let grandParent = $(firstParent).parent('.nav-item');
			grandParent.parents('.nav-collapse').removeClass('collapse');
		}
	});
});