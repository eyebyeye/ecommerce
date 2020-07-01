$(function(){





       var vemail2 = $('#EmailV').attr('idE');
      if (vemail2 == "") {
      
      }else{
        correta()
      }
     
          
          function correta(){
            var vemail = $('#EmailV').attr('idE');
            var Vcorreo = $('#Vcorreo').attr('idC');
           


            
           $.ajax({

             url    : base_url+"CsendMail/correta",
             type   : "post",
             datatype: "json",
             data    : {
                        vemail: vemail,
                        Vcorreo: Vcorreo
                        },
             
                                    
             success: function(data){
                 if (data == 1) {
                    window.location.href = base_url+"Cleave/LeaveSession";
                 }
              }
                                      
          })
          }
      
    })
