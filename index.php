<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script></script>
	<link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/moment.min.js"></script>
	<script src="bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
	<!--full calendaar-->
	<link rel="stylesheet" href="css/fullcalendar.min.css">
	<script src="js/fullcalendar.min.js"></script>
	<script src="js/es.js"></script>
</head>
<body>
	<h1 class="display-4">Calendario</h1>
	<div class="container">
		<div class="row">
			<div class="col"></div>
			<div class="col-7">
				<div id="calendarioweb"></div>
			</div>
			<div class="col"></div>
			
		</div>
	</div>
	
	
	<script>
		$(document).ready(function(){
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
							alert("accion del boton");
						}
					}
				},
				dayClick: function(date, jsEvent, view){
					alert("valor seleccionado: "+date.format());
					alert("vista actual: "+view.name);
					$(this).css('background-color','#2C906A');
					$("#modalday").modal();
				},
				eventSources:[{
						events:[
					{
						title:'evento 1, hola a todos',
						description:"EVENTO DE PRUEBA PRRO DESCRIBCIón",
						start:'2019-03-06',
						color:'#0093B2',
						textColor:'#fff'
					},
					{
						title:'evento 2, olvídala prro',
						description:"descripción del evento 2 prro",
						start:'2019-03-04',
						end:'2019-03-05'
					},
					{
						title:'evento 3 alv todo prro',
						description:"descripcion numero 3",
						start:'2019-03-09T12:30:00',
						allDay:false
					}
				],
				color:"#00BC6C", /*por defecto coje estos colores*/
				textColor:"#fff"
			}],
			eventClick:function(calEvent,jsEvent,view){
				$("#titleEvento").html(calEvent.title);
				$("#descriptionEvent").html(calEvent.description);
				$("#modalday").modal();
			}


			});
		});


	</script>

<!-- Modal -->
<div class="modal fade" id="modalday" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titleEvento"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="descriptionEvent">
        	
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success">Agregar</button>
        <button type="button" class="btn btn-primary">Modificar</button>
        <button type="button" class="btn btn-danger">Borrar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>


</body>
</html>