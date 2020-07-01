$(function(){

	//start login
	$('body').delegate('#loki','click',function(){
		var email = $('#email').val();
		var pass  = $('#pass').val();


		 if (email != "" && pass != "") {
              
              $.ajax({

              	  url    : "http://localhost/Store/login/Clogin/StartSession",
              	  type   : "post",
              	  datatype: "json",
              	  data   : { email : email,
              	             pass  : pass
              	           },
              	  beforeSend: function(){
              	  	$('.gif3').show();
              	  	$('.errorLogin').html("Starting Session");
              	  },
              	  success: function(data){

              	  	$('.gif3').hide();
              	  	if (data ==  false) {
                      $('.errorLogin').html(data);
                       $('#pass').val("")
              	  	}else if(data == 1){
              	  		window.location.href = "http://localhost/Store/login/Clogin/index";
              	  	}else{
                      window.location.href = "http://localhost/Store/Cproduct/adminU";
                    }
                           setTimeout(function(){
                              $('#clod').click()
                           },4000)
              	  
              	  	
              	  }
              })
		 }

		 
	})


       
})