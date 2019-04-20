<?php require('core/conexion.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/menu-style.css">

	<link rel="stylesheet" href="icon/style.css">
	<script src="js/jquery.min.js"></script>
	
	<script src="js/menu-js.js"></script>
	<script src="js/moment.min.js"></script>
	<script src="bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
	<!--full calendaar-->
	<link rel="stylesheet" href="css/fullcalendar.min.css">
	<script src="js/fullcalendar.min.js"></script>
	<script src="js/es.js"></script>
	<script src="js/reg_evento.js"></script>
	<script>
		
	</script>
</head>
<body>


<div class="wrapper">
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 5px">
  <a class="navbar-brand" href="#"> <img src="img/cacperu.png" width="30px" alt=""> CACPERU</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Otras cosas</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Configuracion
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <ul class=" navbar-nav navbar-right" >
      <li><a class="nav-link" href="#"><span class="glyphicon glyphicon-user"></span> Usuario</a></li>
      <li><a class="nav-link" href="#"><span class="glyphicon glyphicon-log-in"></span> Salir</a></li>
    </ul>

  </div>
</nav>

<div class="container-fluid">

	<div class="row">
		<div class="col-md-2">
		<div class="sidebar">
		    <div class="mini-submenu">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		    </div>
			    <div class="list-group">
			        <span href="#" class="list-group-item active">
			            Opciones
			            <span class="pull-right" id="slide-submenu">
			                <i class="fa fa-times"></i>
			            </span>
			        </span>
			        <a href="#" class="list-group-item">
			            <i class="fa fa-comment-o"></i> Reportes
			        </a>
			        <a href="#" class="list-group-item">
			            <i class="fa fa-search"></i> Evento 1
			        </a>
			        <a href="#" class="list-group-item">
			            <i class="fa fa-folder-open-o"></i> Evento 2 <span class="badge">14</span>
			        </a>
			        <a href="#" class="list-group-item">
			            <i class="fa fa-bar-chart-o"></i> Evento 3 <span class="badge">14</span>
			        </a>
			        <a href="#" class="list-group-item">
			            <i class="fa fa-envelope"></i> Evento 4
			        </a>
			    </div>
			    <div class="colores">
					<table>
						<tr>
							<td class="ctitulo">Presencial</td>
							<td class="cpresencial cuadro">#1d5ee9</td>
						</tr>
						<tr>
							<td class="ctitulo">Virtual</td>
							<td class="cvirtual cuadro">#c22e28</td>
						</tr>
						<tr>
							<td class="ctitulo">Auditorio</td>
							<td class="cauditorio cuadro">#0aaf33</td>
						</tr>
					</table>
					<br>
					
			    </div>      
		</div>
	</div>
			<div class="col-md-10">
				<div id="calendarioweb"></div>
			</div>
		</div>
</div>
<!-- MENU-->
<footer class="page-footer">
	<div class="mifooter">
		<a href="javascript:void(0)">Calendario Hecho con <span class="icon-heart"></span> <strong> <?php printf(YEAR_APLICACION); ?></strong> </a> - <a target="_blank" href="https://github.com/jcorpus"><span class="icon-github"></span></a>
	</div>
</footer>
</div>


<!-- MODAL 2 -->
<div class="modal fade" id="eventsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h7 class="modal-title" id="tituloevento"></h7>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="descriptionEvent">
        	<form action="" onkeypress="return agregar_evento(event);">
        	<div class="form-group">
        		<div class="form-group row">
    				<label for="" class="col-sm-1 col-form-label">Fecha:</label>
    				<div class="col-sm-3">
      					<input type="date" disabled="" class="form-control form-control-sm" id="txtdate" placeholder="">
    				</div>
    				<label for="" class="col-sm-1 col-form-label col-form-label-sm">ID:</label>
    				<div class="col-sm-2">
      					<input type="input" disabled="" class="form-control form-control-sm" id="txtid" name="txtid" placeholder="">
    				</div>
  				</div>
  				<div class="form-group row">
    			<label for="" class="col-sm-2 col-form-label">Titulo:</label>
    				<div class="col-sm-9">
      					<input type="input" class="form-control enfocus" id="txttitle" placeholder="Titulo del evento">
    				</div>
  				</div>
  				<div class="form-group row">
    				<label for="" class="col-sm-1 col-form-label">Inicio:</label>
    				<div class="col-sm-3">
      					<input type="time" id="txttime" class="form-control form-control-sm" value="09:00"  placeholder="">
    				</div>
    				<label for="" class="col-sm-1 col-form-label">Fin:</label>
    				<div class="col-sm-3">
      					<input type="time" id="txttimefin" class="form-control form-control-sm" value="19:00"  placeholder="">
    				</div>
  				</div>
  				<div class="form-group row">
    			<label for="" class="col-sm-2 col-form-label">Descripcion:</label>
    				<div class="col-sm-9">
      					<textarea class="form-control" maxlength="250" placeholder="descripcion del evento" id="textdescription" rows="3"></textarea>
    				</div>
  				</div>
  				<div class="form-group row">
    			<label for="" class="col-sm-2 col-form-label">Modalidad:</label>
    				<div class="col-sm-4">
      					<select name="" id="" class="form-control">
      						<option value="">Presencial</option>
      						<option value="">Virtual</option>
      						<option value="">Auditorio</option>
      					</select>
    				</div>
  				</div>
  				<div class="errortipo"></div>
  				<div class="form-check">
    				<input type="checkbox" name="type"  class="form-check-input metodo" value="presencial" id="presencial">
    				<label class="form-check-label" for="presencial">Presencial</label>
				</div>
				<div class="form-check">
    				<input type="checkbox" name="type"  class="form-check-input metodo" value="virtual" id="virtual">
    				<label class="form-check-label" for="virtual">Virtual</label>
				</div>
				<div class="form-check">
    				<input type="checkbox" name="type"  class="form-check-input metodo" value="auditorio" id="auditorio">
    				<label class="form-check-label" for="auditorio">Auditorio</label>
				</div>
  				<div class="form-group row">
    			<label for="" class="col-sm-2 col-form-label">Color:</label>
    				<div class="col-sm-4">
      					<input type="color" disabled="" style="height: 36px" class="form-control" id="txtcolor">
    				</div>
  				</div>
  				<input type="text" hidden="" id="mimodalidad">
  				<input type="text" hidden="" id="micolor">
            </div>
        	</form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" id="btnadd" class="btn btn-outline-success">Agregar</button>
        <button type="button" id="btnmod" class="btn btn-outline-primary">Modificar</button>
        <button type="button" id="btndelete" class="btn btn-outline-danger">Borrar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>
<script>
			$(document).ready(function(){
			///MOSTRAR TITULO COMPLETO DEL EVENTO
			/*
			$("#mtituto").click(function(){
   				var estilos = {"white-space": 'normal'};
   				$(".fc-month-view span.fc-title").css(estilos);
			});

			*/

			$("input:checkbox").on('click', function() {
			  var $box = $(this);
			  if ($box.is(":checked")) {
			    var group = "input:checkbox[name='" + $box.attr("name") + "']";
			    $(group).prop("checked", false);
			    $box.prop("checked", true);
			  } else {
			    $box.prop("checked", false);
			  }
			});
			///check box
			function valor_checkbox(){
				var valor_checkbox, cmodalidad;
			$(".metodo:checked").each(function(){
				valor_checkbox = $(this).val();
			});
			return valor_checkbox;
			}

			function cambiar_checkbox(){
				$("#mimodalidad").val("presencial");
				$("#presencial").prop("checked",true);
				$("#txtcolor").val('#1d5ee9');
				$("#micolor").val('#1d5ee9');
				$(".metodo").change(function(){
					var valor_checkbox2 = valor_checkbox();
					if(!valor_checkbox2){
					alert("falta una modalidad");
					/*$(".errortipo").html("<div class='alert alert-danger' role='alert'>Debes seleccionar un Tipo de Evento</div>");*/
					}else{
					//$(".errortipo").hide();
					$("#mimodalidad").val(valor_checkbox2);
					//$("#mimodalidad").val(calEvent.modalidad);
				    //$("#micolor").val(calEvent.color);
				   //alert("el valor que trae es: "+ valor_checkbox2);
				   switch(valor_checkbox2){
					case "presencial":
					$("#txtcolor").val("#1d5ee9");
					$("#micolor").val("#1d5ee9");
					break;
					case "virtual":
					$("#txtcolor").val("#c22e28");
					$("#micolor").val("#c22e28");
					break;
					case "auditorio":
					$("#txtcolor").val("#0aaf33");
					$("#micolor").val("#0aaf33");
					break;
				}
					}
					

				});
			}



			function clear_dayclick(){
				$("#txtid").val('');
				$("#txttitle").val('');
				$("#tituloevento").val('');
				$("#txtcolor").val('');
				$("#textdescription").val('');
				$("#txttime").val('');
				$("#txttimefin").val('');
				$(".metodo").prop('checked',false);

			}

			$('#calendarioweb').fullCalendar({
				header:{
				left: 'today, prev, next, Miboton',
				center: 'title',
				right: 'month, basicWeek, basicDay, agendaWeek, agendaDay'
				},
				customButtons:{
					Miboton:{
						text: 'Boton1',
						click: function(){
							alert("boton de pruebaa");
						}
					}
				},
				dayClick: function(date, jsEvent, view){
					clear_dayclick();
					cambiar_checkbox();
					$("#txttime").val("09:00");
					$("#txttimefin").val("19:00");
					//eliminar boton modificar cuando agregas
					$("#btnadd").show();
					$("#btnmod").hide();
					$("#btndelete").hide();
					//alert("valor seleccionado: "+date.format());
					//alert("vista actual: "+view.name);
					//$(this).css('background-color','#2C906A');
					$("#txtdate").val(date.format());
				var comprobar = $("#tituloevento").val();
				if(comprobar == ""){
					$("#tituloevento").html("<span class='icon-bookmark'></span>"+" Nuevo Evento");
				}else{
					alert("si hay evento: "+jsEvent.title);
				}
					$("#eventsModal").modal();
				},
						events:'http://192.168.1.9/webapps/calendario01/eventos.php',
				
			eventClick:function(calEvent,jsEvent,view){
				cambiar_checkbox();
				//mostrar botones
				$("#btnmod").show();
				$("#btndelete").show();
				$("#btnadd").hide();
				
				$("#txtid").val(calEvent.id);
				$("#textdescription").val(calEvent.description);
				$("#txttitle").val(calEvent.title);
				$("#tituloevento").html(calEvent.title);
				$("#txtcolor").val(calEvent.color);
				
				$("#mimodalidad").val(calEvent.modalidad);
				$("#micolor").val(calEvent.color);

				FechaHora = calEvent.start._i.split(" ");
				$("#txtdate").val(FechaHora[0]);
				$("#txttime").val(FechaHora[1]);
				//alert("el evento que traigo es: "+calEvent.modalidad);
				//evento fin
				FechaHora2 = calEvent.end._i.split(" ");
				$("#txttimefin").val(FechaHora2[1]);



				var jmodalidad = calEvent.modalidad;
				switch(jmodalidad){
					case "presencial":
					//$("#mimodalidad").val("presencial");
					$("#presencial").prop("checked", true);
					$("#virtual").prop("checked", false);
					$("#auditorio").prop("checked", false);
					break;
					case "virtual":
					//$("#mimodalidad").val("virtual");
					$("#presencial").prop("checked", false);
					$("#virtual").prop("checked", true);
					$("#auditorio").prop("checked", false);
					break;
					case "auditorio":
					//$("#mimodalidad").val("auditorio");
					$("#presencial").prop("checked", false);
					$("#virtual").prop("checked", false);
					$("#auditorio").prop("checked", true);
					break;
					default:
					alert("No hay Modalidad en el evento");
				}

				$("#eventsModal").modal();
			},
			editable: true,
			eventDrop: function(calEvent){

				$("#txtid").val(calEvent.id);
				$("#txttitle").val(calEvent.title);
				$("#txtcolor").val(calEvent.color);
				$("#textdescription").val(calEvent.description);
				//alert("la modalidad que mando es: "+calEvent.color);

				///////TIPO DE EVENTO
				$("#mimodalidad").val(calEvent.modalidad);
				$("#micolor").val(calEvent.color);
			
				var DateTime = calEvent.start.format().split("T");
				$("#txtdate").val(DateTime[0]);
				$("#txttime").val(DateTime[1]);
				//evento fecha de fin
				var DateTime2 = calEvent.end.format().split("T");
				$("#txttimefin").val(DateTime2[1]);

				recolectardatosGUI();
				enviarinformation('modificar',nuevoEvent,true);
			}


			});
		});


/*EVENTO ENTER*/


var nuevoEvent;
function validar_titulo(){
	var validar_titulo = false;
	var expresion_r = /^\s/;
			var jtxttitle = $("#txttitle").val();
			jtxttitle = jtxttitle.trim();
			if(!expresion_r.test(jtxttitle) && jtxttitle.length == 0){
				validar_titulo = false;
				alert("Falta un Título o hay espacio en blanco al inicio del TÍTULO");
			}else{
				validar_titulo = true;
			}
			return validar_titulo;
}

function validar_hora(){
	var valor_hora = false;
	var comprobar_hora_inicio = $("#txttime").val();
	var comprobar_hora_fin = $("#txttimefin").val();
	if(comprobar_hora_inicio < comprobar_hora_fin){
		//alert("correcto");
		valor_hora =  true;
	}else{
		alert("La hora de INICIO no debe ser menor o igual a la hora de FIN");
		valor_hora = false;
	}
	return valor_hora;


}

function agregar_evento(e){
	if (e.keyCode == 13){
		recolectardatosGUI();
		
		if(validar_titulo() && validar_hora()){
			enviarinformation('agregar',nuevoEvent);
		}else{
			alert("Corregir los ERRORES");
		}
		
	}
}




	
		$("#btnadd").click(function(){
			recolectardatosGUI();
			if(validar_titulo() && validar_hora()){
			enviarinformation('agregar',nuevoEvent);
		}else{
			alert("Corregir los ERRORES");
		}
			
			
	});

		$("#btndelete").click(function(){
			recolectardatosGUI();
			enviarinformation('eliminar',nuevoEvent);
		//$('#calendarioweb').fullCalendar('renderEvent', nuevoEvent);
	});

		$("#btnmod").click(function(){
			recolectardatosGUI();
			if(validar_titulo() && validar_hora()){
			enviarinformation('modificar',nuevoEvent);
		}else{
			alert("Corregir los ERRORES");
		}
	});


	function recolectardatosGUI(){	
		 nuevoEvent ={
			id:$("#txtid").val(),
			title:$("#txttitle").val(),
			start:$("#txtdate").val()+" "+$("#txttime").val(),
			//color:cmodalidad,
			color:$("#micolor").val(),
			description:$("#textdescription").val(),
			textColor:"#fff",
			end:$("#txtdate").val()+" "+$("#txttimefin").val(),
			modalidad:$("#mimodalidad").val()

		};
	}

	function enviarinformation(accion,objevento, modal){
		$.ajax({
			type:'POST',
			url:'eventos.php?accion='+accion,
			data:objevento,
			success:function(msg){
				if(msg){
					$('#calendarioweb').fullCalendar('refetchEvents');
					if(!modal){
						$("#eventsModal").modal('toggle');
					}
					
				}else{
					alert("ocurrio un error: "+msg);
				}
			},
			error:function(XMLHttpRequest, textStatus, errorThrown, jqXHR){
				alert("ocurrió un error: "+XMLHttpRequest+" - "+textStatus+" - "+errorThrown+" - "+jqXHR);
			}
		});
	}





	//generar codigos
/*
function generar_codigo(){
  var titulo = $("txttitle").val();
  var modalidad = $("mimodalidad").val();
  var fecha = $("#txtdate").val(DateTime[0]);
  var primera = titulo.substr(0,1);
  var segunda = modalidad.substr(0,1);
  var tercera = fecha.substr(0,1);
    caracteres = "0123456789abcdefghijklmnopqrstuvwxyz";
    longitud = 5;
      
    code = "";
      for (x=0; x < longitud; x++){
      rand = Math.floor(Math.random()*caracteres.length);
      code += caracteres.substr(rand, 1);
      }
      //return code;
      document.getElementById("codigo_evento").value =primera+segunda+tercera+code;
    }

	*/

</script>

</body>
</html>



