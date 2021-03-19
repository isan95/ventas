$(function(){
  
  $('#codigoPro').keyup(function(){
  	 var url = $('#frmBPro').attr('action');
     var datos = $(this).serialize();
  	 $.post(url, datos, function(o){
  	 	$('#resultado').html(o.text);
  	 },'json');
  	 return false;
  });

   $('#codigoFor').keyup(function(){
  	 var url = $('#frmBFor').attr('action');
     var datos = $(this).serialize();
  	 $.post(url, datos, function(o){
  	 	$('#resultado').html(o.text);
  	 },'json');
  	 return false;
  });

   $('#frmEdPro').submit(function(){
     var url   = $(this).attr('action');
     var datos = $(this).serialize();
     $.post(url, datos, function(o){
         
           $.notify({
              icon: "ti-pencil-alt2",
              message: o.text
           },{
              type: o.estado,
              timer: 500
           });
        
     },'json');
     return false;
  });

});