 $(function(){
          ShowListCategory()
            
          function ShowListCategory(){

            $.ajax({

                  url      : base_url+"Ccategory/ShowListCategory",
                  type     : "post",
                  dataType : "json",
                  success  : function(data){

                    var html = "";

                    for(var i = 0; i < data.length; i++){
                          
                          // html += '<a class="dropdown-item" style="color:white" id="category"  idC='+data[i].categoria_id+' href="#">'+data[i].categoria_title+'</a><hr>'
                         html += '<a href="" id="category" class="cateMar"  idC='+data[i].categoria_id+'>'+data[i].categoria_title+'</a><br><br>';           
                    }

                    $('#mostrarCategoria').html(html);
                  },
                  error  : function(){

                    alert("error")
                  }
            })
          }

          //show for categoria
          $('body').delegate('#category','click',function(e){
            e.preventDefault()
            

              var categoryId = $(this).attr('idC');
                
               $.ajax({

                    url      : base_url+"Ccategory/ShowCategoriaId",
                    type     : "post",
                    dataType : "json",
                    data     : { categoryId :categoryId},
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

        })
