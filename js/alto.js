$(document).ready(function(){
	$("#particles-js").css({"height":$(window).height() + "px"});



	/*Boton para subir en la pagina*/

   	$('.ir-arriba').click(function(e){
        e.preventDefault();
        $('bady, html').animate({
            scrollTop: 0
        }, 1000);
        return false;
    });

    /*Muestra o esconde el boton de subir*/
    $(window).scroll(function(){
   		if($(this).scrollTop() > 0 ){
   			$('.ir-arriba').slideDown(300);

   		}else{
   			$('.ir-arriba').slideUp(300);
   		}

   	});


    /*Ir de un div a otro desde el nav*/
    $('.collapse').find("a").click(function(e) {
      e.preventDefault();
      var section = $(this).attr("href");
      $("html, body").animate({
          scrollTop: $(section).offset().top
      },2000);
  });




});