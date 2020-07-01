$(function(){

  

  /// contador para visitas
	contadorVisistas()

         function contadorVisistas(){
       
             $.ajax({


                  url     : base_url+"Cadministrador/adminUsuario/CountVisit",
                  type    : "post",
                  
                  success : function(data){

                    $('.visitasl').html(data);
                    
                  },
                  error:function(){
                  	alert("error")
                  }
             })
         }


})