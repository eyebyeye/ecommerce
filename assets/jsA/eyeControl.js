$(function(){




///cmuestara las contrasenia si el usuario asi lo deceas
	 $('body').delegate('#ojoe','click',function(){

            var acion = $(this).attr('acion');

            if (acion == "hide") {
               $('.oli').attr('type','text');
               $('#ojoe').removeAttr('src','assets/iconos/_ionicons_svg_md-eye.svg');
               $('#ojoe').attr('src','assets/iconos/_ionicons_svg_md-eye-off.svg').attr('acion','show');
            }

             if (acion == "show") {

                  $('.oli').attr('type','password');
                  $('#ojoe').removeAttr('src','assets/iconos/_ionicons_svg_md-eye-off.svg');
                  $('#ojoe').attr('src','assets/iconos/_ionicons_svg_md-eye.svg').attr('acion','hide');
              }
          })
})