$(function(){
      a()
          function a(){
           

               $.ajax({

                   url    : base_url+"CproductOferta/ShowProducts",
                   type   : "post",
                   dataType: "json",
                   success:function(data){
                    var html = "";

                    for(var i = 0; i < data.length; i++){
                        
                        html += '<div class="col-md-3">'+
    
                                  '<div class="card-header">'+

                           '<div class="relativa" >'+
                               '<img class="card-img-top proD" src="http://localhost/Store/assets/imagenes/'+data[i].productos_image+'" width="250px" height="250px" alt="First slide">'+
                               '<div  class="absoluta"> Oferta</div>'+
                           '</div>'+

                         '</div>'+
                         '<div class="card-body bo">'+
                           <!-- ///////////// -->
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
                                      '<center><button id="boO" class="btn btn-primary boO" idD='+data[i].productos_id+'>Ver Detalles</button></center>'+
                                    '</div>'+
                                  '</div>'+
                                '</div>'+
    
                  '</div>'
                    }
                    $('#ofert1').html(html);
                   },
                   error:function(){
                    alert("error")
                   }
               });
          }



          /////ofert number 2 

          ofert2()
          function ofert2(){

               $.ajax({

                   url    :  base_url+"CproductOferta/ShowProducts2",
                   type   : "post",
                   dataType: "json",
                   success:function(data){
                    var html = "";

                    for(var i = 0; i < data.length; i++){
                        
                        html += '<div class="col-md-3">'+
    
                                  '<div class="card-header">'+

                           '<div class="relativa" >'+
                               '<img class="card-img-top proD" src="http://localhost/Store/assets/imagenes/'+data[i].productos_image+'" width="250px" height="250px" alt="First slide">'+
                               '<div  class="absoluta"> Oferta</div>'+
                           '</div>'+

                         '</div>'+
                         '<div class="card-body bo">'+
                           <!-- ///////////// -->
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
                                      '<center><button id="boO" class="btn btn-primary boO" idD='+data[i].productos_id+'>Ver Detalles</button></center>'+
                                    '</div>'+
                                  '</div>'+
                                '</div>'+
    
                  '</div>'
                    }
                    $('#ofert2').html(html);
                   },
                   error:function(){
                    alert("error")
                   }
               });
          }


          // ofer3 number 3

          ofert3()
          function ofert3(){

               $.ajax({

                   url    : base_url+"CproductOferta/ShowProducts2",
                   type   : "post",
                   dataType: "json",
                   success:function(data){
                    var html = "";

                    for(var i = 0; i < data.length; i++){
                        
                        html += '<div class="col-md-3">'+
    
                                  '<div class="card-header">'+

                           '<div class="relativa" >'+
                               '<img class="card-img-top proD" src="http://localhost/Store/assets/imagenes/'+data[i].productos_image+'" width="250px" height="250px" alt="First slide">'+
                               '<div  class="absoluta"> Oferta</div>'+
                           '</div>'+

                         '</div>'+
                         '<div class="card-body bo">'+
                           <!-- ///////////// -->
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
                                      '<center><button id="boO" class="btn btn-primary boO" idD='+data[i].productos_id+'>Ver Detalles</button></center>'+
                                    '</div>'+
                                  '</div>'+
                                '</div>'+
    
                  '</div>'
                    }
                    $('#ofert3').html(html);
                   },
                   error:function(){
                    alert("error")
                   }
               });
          }


    })