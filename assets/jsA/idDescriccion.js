$(function(){


	//obter id de los productos para mostara la descriccion de cada uno
          $('body').delegate('#boO','click',function(){
              
              var idD = $(this).attr('idD');
              window.location.href = base_url+"Cproduct/PUI?parametro="+idD;
          })
})