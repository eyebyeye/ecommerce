$(function(){

	 $('body').delegate('#filtrarArticulos','keyup',function(e){
         e.preventDefault();
          
          var buscar = $('#filtrarArticulos').val();
           
           

          $.ajax({

          	    url      : base_url+"Cadministrador/CsearchAdmin/SearchAdmin",
          	    type     : "post",
          	    //dataType : "json",
          	    data     : {buscar:buscar},
          	    success  : function(data){
          	    //	 var html = "";

               
                $('#usuario1').html(data);
            },
            error : function(){

            	alert("error");
            }
          })
       
     })
})