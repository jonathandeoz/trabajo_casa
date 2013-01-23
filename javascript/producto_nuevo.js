$(document).ready(function(){
$('#agrega').click(function(){
var n=parseInt($('#nuevos').val())+1;
$('#lista_prod').append('<tr><td><input type="text" name="prod1_'+n+'" id="prod1_'+n+'"/></td><td><input type="text" name="prod2_'+n+'" id="prod2_'+n+'"/></td><td><input type="text" name="prod3_'+n+'" id="prod3_'+n+'"/></td><td><input type="text" name="prod_" id="prod_"/></td><td><input type="text" name="cod1_'+n+'" id="cod1_'+n+'"/></td><td><input type="text" name="cod2_'+n+'" id="cod2_'+n+'"/></td><td><select name="state_'+n+'" id="state_'+n+'"><option value="1">Activo</option><option value="2">Inactivo</option></select></td><td class="eliminar">X</td></tr>');
$('#nuevos').val(n);

$('.eliminar').click(function(){
$(this).parent().css("display","none");});
});

$('#carga_data').click(function(){
var temp_format=$('#format :selected').val();
$.post("llamada_productos2.php",{formato:temp_format},function(data){                          
	$("tbody").remove();						
	$('#lista_prod').append(data);
$('.eliminar').click(function(){
$(this).parent().css("display","none");
});
});
});


$('#registro').submit(function(){

var temp_format=$('#format :selected').val();
var temp_type=$('#typenew_'+n+' :selected').val();
var temp_state=$('#state_'+n+' :selected').val();
$('#registro').append('<input type="hidden" id="format_'+n+'" name="format_'+n+'" value="'+temp_format+'"/><input type="hidden" id="type_'+n+'" name="type_'+n+'" value="'+temp_type+'"/><input type="hidden" id="state_'+n+'" name="state_'+n+'" value="'+temp_state+'"/>');

$.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $("tr").serialize(),
            success: function() 
			{alert('Datos guardados correctamente');}
}); 
return false;
});

});

