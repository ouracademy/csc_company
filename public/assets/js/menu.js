$(document).ready(function() {

	$(document).scroll(function(){
  	var top = $(window).scrollTop();

	  console.log(top)
		if(top>500){
	   	$('#menu-principal').addClass('menu-principal-fixed').delay(25);
	   	// $('.navbar').addClass('navbar-fixed');
		}
		
		if(top<2){
	   	// $('.navbar').removeClass('navbar-fixed');
	   	$('#menu-principal').removeClass('menu-principal-fixed');
		}

	});
	
});


