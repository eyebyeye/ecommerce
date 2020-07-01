$(function(){

     $('body').delegate('#buscar','keyup',function(e){
        e.preventDefault();
          
          var buscar = $('#buscar').val();
           
           

          $.ajax({

          	    url      : base_url+"Csearch/Search",
          	    type     : "post",
          	    dataType : "json",
          	    data     : {buscar:buscar},
          	    success  : function(data){
          	    	 var html = "";

                for(var i = 0; i < data.length; i++){

                   html += '<div class="col-md-3 mt-4 ">'+
                
                    '<div class="card-header proD">'+
                        '<img class="card-img-top proD proD2" src="http://localhost/Store/assets/imagenes/'+data[i].productos_image+'" width="250px" height="250px" alt="First slide">'+
                      '</div>'+
                      '<div class="card-body bg-danger proD proD2">'+
                        '<div class="row">'+
                          '<div class="col-md-12">'+
                             '<center><b class="mt-1">'+data[i].productos_title+'</b></center>'+
                          '</div>'+
                        '</div>'+
                         '<div class="row">'+
                          '<div class="col-md-12">'+
                            '<center><b class="mt-1">$'+data[i].productos_precio+'</b></center>'+
                          '</div>'+
                        '</div>'+
                         '<div class="row">'+
                          '<div class="col-md-12">'+
                            '<center><button class="btn btn-primary" id="boO" idD='+data[i].productos_id+'>Ver Detalles</button></center>'+
                          '</div>'+
                           '</div>'+
                   '</div>'+
               
              '</div>'
                }
                $('#mostrarProducto').html(html);
            },
            error : function(){

            	alert("error");
            }
          })
       
     })

})