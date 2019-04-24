/*
function agregar_evento(e){
	if (e.keyCode == 13){
		go_event();
	}
}


function go_event(){
	alert("funciona el enter");
}

*/
$(document).ready(function(){

$("#activar_ficha").change(function(){

	open('ficha_orientacion.php','',"width=1220,height=600,scrollbars=NO") ; 

});
});


