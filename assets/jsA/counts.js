$(function(){
          CountCar()
            
          function CountCar(){
            var idC = $('#idC').val();


            $.ajax({

                  url      : "http://localhost/Store/Cproduct/CountCar",
                  type     : "post",
                  dataType : "json",
                  data     : { idC : idC},
                  success  : function(data){

                   $('.con').html(data);
                  },
                  error  : function(){
                    
                    alert("error")
                  }
            })
          }

          //show all products add to the cart for id different of users

  ShowCartUser()
          function ShowCartUser(){
           var idC = $('#idC').val();
                $.ajax({

                  url      : base_url+"Cproduct/ShowUserId",
                  type     : "post",
                  dataType : "json",
                  data     : { idC : idC},
                  success  : function(data){

                    var html = "";
                    var contador = 1;
                    for(var i = 0; i < data.length; i++){

                      html += '<tr style="color: white">'+
                          
                                ' <th id="no_C" name="no">'+contador+++'</th>'+
                                  '<th><img src="http://localhost/Store/assets/imagenes/'+data[i].productos_image+'" class="rounded-circle" id="image_C" width="60"></th>'+
                                  '<th id="titulo_C">'+data[i].productos_title+'</th>'+
                                ' <th id="precio_C">'+data[i].precio+'</th>'+
                                  '<th id="precio_C">'+data[i].qty+'</th>'+
                                '</tr>'

                    }
                   $('.op').html(html);
                  
                   
                  },
                  error  : function(){
                    
                    alert("error")
                  }
            })
          }
        })