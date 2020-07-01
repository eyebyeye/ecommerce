$(function(){

         $('#loade').hide();
         $('#nombre').focus();
          
         //registrar al dar clikc si cumplen con las validaciones requeridads            
           $('#registro').on('click',function(e){
            e.preventDefault();


            
            //objetor para validar  registro
                 var registro = {

                    nombre   : $('#nombre').val(),
                    apellido : $('#apellido').val(),
                    email    : $('#email2').val(),                    
                    pass1    : $('#pass1').val(),
                    pass2    : $('#pass2').val(),
                    pais     : $('#pais').val(),
                    ciudad   : $('#ciudad').val(),
                    direccion: $('#direccion').val(),
                    telefono : $('#telefono').val()
                } 

               
              
              $.each(registro,function(i,valor){
                   
                   switch(valor){

                    case  registro.nombre:
                           Empty(valor) === false  ? $('.errorNombre').show().html("Campo nombre Obligatoro") + 
                                                     $('#nombre').focus() : $('.errorNombre').slideUp(1000);
                    break;

                    case  registro.apellido:
                            Empty(valor) === false  ? $('.errorApellido').show().html("Campo apellido Obligatoro") + 
                                                      $('#apellido').focus() : $('.errorApellido').slideUp(1000);
                    break;
                      // ││ EmailValidar(valor) === false
                    case  registro.email:
                            Empty(valor) === false   ? +
                                                      $('.errorEmail').show().html("campo email obligatorio") + 
                                                      $('#email2').focus() : EmailValidar(valor) === false ? +
                                                      $('.errorEmail').show().html("Email invalido")+ $('#email2').focus() +
                                                       finish() : $('.errorEmail').slideUp(1000);
                    break; 

                    
                 
                    case  registro.pass1:
                            Empty(valor) === false  ? $('.errorContra12').hide(1000) +
                                                      $('.errorContra').show().html("Campo password Obligatoro") + 
                                                      $('#pass1').focus() : MayorOcho(valor) == false ?
                                                      $('.errorContra').html("Contrasenia corta")+
                                                      $('.errorContra12').hide(1000) +
                                                      $('#pass1').focus() + finish() : + 
                                                      $('.errorContra').slideUp(1000);
                    break;

                     case  registro.pass2:
                            Empty(valor) === false  ? $('.errorContra2').show().html("Campo Re-password Obligatoro") + 
                                                      $('#pass2').focus() : Igual(valor,registro.pass1) == false ? +
                                                      $('#errorContra12').show() + $('#pass1').focus() +
                                                      $('#pass1').val("").focus() + $('.errorContra2').hide() +
                                                      $('#pass2').val("") + finish() : $('.errorContra12').hide(1000);
                      break;
                       
                      case registro.pais:
                            Empty(valor) === false ?  $('.errorPais').show().html("Campo pais es Obligatorio") +
                                                      $('#pais').focus() : $('.errorPais').slideUp(1000);
                       break;

                       case registro.ciudad:
                            Empty(valor) === false ?  $('.errorCiudad').show().html("Campo ciudad es Obligatorio") +
                                                      $('#ciudad').focus() : $('.errorCiudad').slideUp(1000);
                       break;

                        case registro.direccion:
                            Empty(valor) === false ?  $('.errorDireccion').show().html("Campo direccion es Obligatorio") +
                                                      $('#direccion').focus() : $('.errorDireccion').slideUp(1000);
                       break;

                      // case registro.telefono:
                      //       Empty(valor) == false ?  $('.errorTelefono').show().html("Campo telefono es Obligatorio") +
                      //                                 $('#telefono').focus() : $('.errorTelefono').slideUp(1000);
                      // break;



                    default:
                   
                      $.ajax({

                        url  : base_url+"Cregister/agregarUsuario",
                        type : "POST",
                        data : registro,
                        beforeSend:function(){
                           $('#loade').show();
                           $('.confirmaRegistro').html('Please wait...');
                        },
                        success:function(data){                            
                          
                             if (data == 1) {


                           $('#loade').hide();
                           $('.confirmaRegistro').html('<div class="alert alert-warning alert-dismissible fade show" style="background:lightgrenn;border:2px solid blue;border-radius:20px 20px 20px 20px" role="alert">'+
                                                       '<strong>Este Email ya existe</strong>'+
                                                       '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                                                         '<span aria-hidden="true" class="cerrar1" id="clod">&times;</span>'+
                                                        '</button>'+
                                                      '</div>');
                           
                          
                           setTimeout(function(){
                             
                             $('.cerrar1').trigger('click');
                             
                           },4000)

                          }
                          
                         else if (data == "si") {


                           $('#loade').hide();
                           $('.confirmaRegistro').html('<div class="alert alert-warning alert-dismissible fade show" style="background:lightgrenn;border:2px solid blue;border-radius:20px 20px 20px 20px" role="alert">'+
                                                       '<strong>Errors</strong>'+
                                                       '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                                                         '<span aria-hidden="true" class="cerrar1" id="clod">&times;</span>'+
                                                        '</button>'+
                                                      '</div>');
                           
                          
                           setTimeout(function(){
                             
                             $('.cerrar1').trigger('click');
                             
                           },4000)

                          }else{
                           $('#loade').hide();
                           $('.confirmaRegistro').html('<div class="alert alert-warning alert-dismissible fade show" style="background:lightgrenn;border:2px solid blue;border-radius:20px 20px 20px 20px" role="alert">'+
                                                       '<strong>Usuario agregado con exito</strong>'+
                                                       '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                                                         '<span aria-hidden="true" class="cerrar1" id="clod">&times;</span>'+
                                                        '</button>'+
                                                      '</div>');
                           
                         
                           // setTimeout(function(){
                             
                           //   $('.cerrar1').trigger('click');
                             iniciar()
                              emaiSend()
                            
                             
                           // },500)
                           

                        }
                          }
                      })
                      finish();

                    break;

                   }
              })


           })

            //esta funcion de aqui auto inicia login al momemto de agregar un usuario .es llamada por la funcion de ,as arriba

                  function iniciar(){

                              var email   = $('#email2').val();
                              var pass   = $('#pass1').val();
                                $.ajax({

                                    url    : "http://localhost/Store/login/Clogin/StartSession",
                                    type   : "post",
                                    datatype: "json",
                                    data   : { email : email,
                                               pass  : pass
                                             },
                                    
                                    success: function(data){

                                      
                                      if (data != 1) {
                                        
                                         $('#pass').val("")
                                      }else{
                                        window.location.href = "http://localhost/Store/login/Clogin/index";
                                      }
                                             
                  
                    
                                      }
                                  })
                               }
                              
                             
                            //por medio de sta funcion se manda el imail para poder validar cuando se registra el usario
                            

                               function emaiSend(){

                               
                                var email   = $('#email2').val();

                            
                                $.ajax({

                                    url    : base_url+"CsendMail/sendMail",
                                    type   : "post",
                                    datatype: "json",
                                    data   : { email : email
                                             },
                                    
                                    success: function(data){
                                        $('.a').html(data);
                                        }
                                      
                                  })
                               }

                             
                               
                             


             
               // ====================Inicio===============================  
          //contrasenia  mayor a 8 

          function MayorOcho(valor){

            if (valor.length < 8) {
              return false;
            }
            return true;
          }

          // ====================Inicio===============================  
          //contrasenia  mayor a 8 

          function Igual(valor1,valor2){

            if (valor1 != valor2) {
              return false;
            }
            return true;
          }

           // ====================Inicio===============================  
          //funcion para validar que el email este biien ecrito o que sea valido
         function EmailValidar(email){

                var tester =  /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-]+)\.)+([a-zA-Z0-9]{2,4})+$/;

                 return   tester.test(email);
              }

           // ====================Inicio===============================  
          //funcion para validar campo enten llenos e
           function Empty(valor){

              if(valor == ""){
                return false;
              }

              return true;
           }

         
       
          
       })