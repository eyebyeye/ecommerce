$(function(){


     pagination()
      function pagination(){

          $.ajax({

                url     : base_url+"Cproduct/pagination",
                type    : "post",
                dataType: "json",
                success : function(data){

                    var html = "";  

                    for(var i = 1; i < data; i++){
                      html +="<a class='page-link ' id='pag' pag="+i+"  href='#' tabindex='-1'>"+i+"</a>";
                    }

                     $('.paginar').html(html);
                }
          })
         
      }
  })