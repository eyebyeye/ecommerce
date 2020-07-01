$(function(){
ShowListBrand()
            
          function ShowListBrand(){
        
            $.ajax({

                  url      : base_url+"Cbrand/ShowListBrand",
                  type     : "post",
                  dataType : "json",
                  success  : function(data){

                    var html = "";

                    for(var i = 0; i < data.length; i++){
                          
                          //html += ' <a class="dropdown-item" style="color:white" idM='+data[i].marcas_id+' href="#">'+data[i].marcas_title+'</a><hr>'
                        html += '<span>(<span id="uj"></span>)</span><a href="#" id="brand" idM='+data[i].marcas_id+' class="cateMar" >'+data[i].marcas_title+'</a><br><br>'; 
                    }

                    $('#mostrarMarcas').html(html);
                  },
                  error  : function(){
                    
                    alert("error")
                  }
            })
          }
              

          // show brand for id

          $('body').delegate('#brand','click',function(e){
             e.preventDefault();
             
             var brandId = $(this).attr('idM');
                $.ajax({

                    url      : base_url+"Cbrand/ShowBrandId",
                    type     : "post",
                    dataType : "json",
                    data     : { brandId :brandId},
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
              }
          })
        })

          // count products there are in brand
          //  CountBrand()
          // function CountBrand(){


          //     $.ajax({

          //         url     : "http://localhost/Store/Cbrand/CountBrand",
          //         type    : "post",
          //         dataType: "json",
          //         success : function(data){
                   
          //           $('#uj').html(data);
          //         }
          //     })
          // }
      })     