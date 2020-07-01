$(function(){
      ShowProductNew()
          function ShowProductNew(){

               $.ajax({

                   url    : base_url+"CproductNuevo/ShowProductNew",
                   type   : "post",
                   dataType: "json",
                   success:function(data){
                    var html = "";

                    for(var i = 0; i < data.length; i++){
                        
                        html += '<div class="col-md-3">'+
    
                                  '<div class="card-header" style="border-radius:20px 90px 20px 90px;border: 1px solid red;">'+

                           '<div class="relativa" >'+
                               '<img class="card-img-top proD" src="http://localhost/Store/assets/imagenes/'+data[i].productos_image+'" width="250px" height="250px" alt="First slide">'+
                               '<div  class="absoluta"> New</div>'+
                           '</div>'+

                         '</div>'+
                         '<div class="card-body bo" style="border-radius: 80px 50px 50px 80px;background:lightblue">'+
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
                                      '<center><button class="btn btn-primary boO" id="boO" idD='+data[i].productos_id+'>Ver Detalles</button></center>'+
                                    '</div>'+
                                  '</div>'+
                                '</div>'+
    
                  '</div>'
                    }
                    $('#nuevo1').html(html);
                   },
                   error:function(){
                    alert("error")
                   }
               });
          }

          // show 2
           ShowProductNew2()
          function ShowProductNew2(){

               $.ajax({

                   url    : base_url+"CproductNuevo/ShowProductNew2",
                   type   : "post",
                   dataType: "json",
                   success:function(data){
                    var html = "";

                    for(var i = 0; i < data.length; i++){
                        
                        html += '<div class="col-md-3">'+
    
                                  '<div class="card-header" style="border-radius:20px 90px 20px 90px;border: 1px solid red;">'+

                           '<div class="relativa" >'+
                               '<img class="card-img-top proD" src="http://localhost/Store/assets/imagenes/'+data[i].productos_image+'" width="250px" height="250px" alt="First slide">'+
                               '<div  class="absoluta"> New</div>'+
                           '</div>'+

                         '</div>'+
                         '<div class="card-body bo" style="border-radius: 80px 50px 50px 80px;background:lightblue">'+
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
                                      '<center><button class="btn btn-primary boO" id="boO" idD='+data[i].productos_id+'>Ver Detalles</button></center>'+
                                    '</div>'+
                                  '</div>'+
                                '</div>'+
    
                  '</div>'
                    }
                    $('#nuevo2').html(html);
                   },
                   error:function(){
                    alert("error")
                   }
               });
          }

          // show 3

          ShowProductNew3()
          function ShowProductNew3(){

               $.ajax({

                   url    : base_url+"CproductNuevo/ShowProductNew3",
                   type   : "post",
                   dataType: "json",
                   success:function(data){
                    var html = "";

                    for(var i = 0; i < data.length; i++){
                        
                        html += '<div class="col-md-3">'+
    
                                  '<div class="card-header" style="border-radius:20px 90px 20px 90px;border: 1px solid red;">'+

                           '<div class="relativa" >'+
                               '<img class="card-img-top proD" src="http://localhost/Store/assets/imagenes/'+data[i].productos_image+'" width="250px" height="250px" alt="First slide">'+
                               '<div  class="absoluta"> New</div>'+
                           '</div>'+

                         '</div>'+
                         '<div class="card-body bo" style="border-radius: 80px 50px 50px 80px;background:lightblue">'+
                           <!-- ///////////// -->
                              '<div class="row">'+
                                    '<div class="col-md-12" >'+
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
                                      '<center><button class="btn btn-primary boO" id="boO" idD='+data[i].productos_id+'>Ver Detalles</button></center>'+
                                    '</div>'+
                                  '</div>'+
                                '</div>'+
    
                  '</div>'
                    }
                    $('#nuevo3').html(html);
                   },
                   error:function(){
                    alert("error")
                   }
               });
          }
        
    })
//Show new 2


