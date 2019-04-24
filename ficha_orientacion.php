<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/menu-style.css">

	<link rel="stylesheet" href="icon/style.css">
	<script src="js/jquery.min.js"></script>
	
	<script src="js/menu-js.js"></script>
	<script src="js/moment.min.js"></script>
	<script src="bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
	<style>
		.bordee{
			border:1px solid #343a40;
			padding: 4px 5px;
			margin-bottom: 6px;
		}
	</style>
</head>
<body>
	
	<div class="container">
		<div class="col-md-12">
	<form>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="" class="col-form-label-sm">Nombre Módulo</label>
      <input type="text" class="form-control form-control-sm" id="validationDefault01" placeholder="First name" value="Mark" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="" class="col-form-label-sm">Especialista</label>
      <input type="text" class="form-control form-control-sm" id="validationDefault02" placeholder="Last name" value="Otto" required>
    </div>
	<div class="col-md-2 mb-3">
      <label for="" class="col-form-label-sm">DNI</label>
      <input type="text" class="form-control form-control-sm" id="validationDefault02" placeholder="Last name" value="Otto" required>
    </div>
    <div class="col-md-2 mb-3">
      <label for="" class="col-form-label-sm">Fase/Modulo</label>
      <input type="text" class="form-control form-control-sm" id="validationDefault02" placeholder="Last name" value="Otto" required>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-3 mb-3">
      <label for="" class="col-form-label-sm">Actividad Programa</label>
      <input type="text" class="form-control form-control-sm" id="validationDefault03" placeholder="City" required>
    </div>
    <div class="col-md-2 mb-3">
      <label for="" class="col-form-label-sm">Turno</label>
      <input type="text" class="form-control form-control-sm" id="validationDefault04" placeholder="State" required>
    </div>
    <div class="col-md-2 mb-2">
      <label for="" class="col-form-label-sm">Turno fin</label>
      <input type="time" class="form-control form-control-sm" id="validationDefault05" placeholder="Zip" required>
    </div>
    <div class="col-md-2 mb-2">
      <label for="" class="col-form-label-sm">Sede</label>
      <input type="text" class="form-control form-control-sm" id="validationDefault05" placeholder="Zip" required>
    </div>
    <div class="col-md-2 mb-2">
      <label for="" class="col-form-label-sm">Fecha</label>
      <input type="date" class="form-control form-control-sm" id="validationDefault05" placeholder="Zip" required>
    </div>
  </div>
  <div class="bordee">
  	  	<fieldset>
  		<legend><h6>I. INFORMACIÓN DE LA SEDE:</h6></legend>
    <div class="form-row">
    	
    <div class="col-md-4 ">
      <label for="" class="col-form-label-sm">Dirección del Oficina</label>
      <input type="text" value="Urb. Las Casuarinas Mz. E1 - Lt.06" class="form-control form-control-sm" id="validationDefault03" required>
    </div>
    <div class="col-md-4">
      <label for="" class="col-form-label-sm">Director de la Sede</label>
      <input type="text" value="Mijail Andre Nuñez Gomez" class="form-control form-control-sm" id="validationDefault04" placeholder="State" required>
    </div>
    <div class="col-md-2 mb-2">
      <label for="" class="col-form-label-sm">Telef</label>
      <input type="text" value="43 - 604932" class="form-control form-control-sm" id="validationDefault05"  required>
    </div>
        <div class="col-md-2 mb-2">
      <label for="" class="col-form-label-sm">Celular</label>
      <input type="text" value="953620444" class="form-control form-control-sm" id="validationDefault05"  required>
    </div>
    </div>
    </fieldset>
  </div>
    <div class="bordee">
  	  	<fieldset>
  		<legend><h6>II. ITINERARIO DE VIAJE E INFORMACION DEL EVENTO</h6></legend>
    <div class="form-row">
    	
    <div class="col-md-4 ">
      <label for="" class="col-form-label-sm">Salida : Ag Viaje / Aerolínea</label>
      <input type="text" value="LC Perú" class="form-control form-control-sm" id="validationDefault03" required>
    </div>
    <div class="col-md-1">
      <label for="" class="col-form-label-sm">Vuelo:</label>
      <input type="text" value="W42193" class="form-control form-control-sm" id="validationDefault04" placeholder="State" required>
    </div>
    <div class="col-md-7">
      <label for="" class="col-form-label-sm">Reserva de Alojamiento:</label>
      <input type="text" value="HOTEL REMANSO   Urb. Miguel Grau. Mz W2 - Lt. 31 (Frente a la consultora Cacp Perú)" class="form-control form-control-sm" id="validationDefault04" placeholder="State" required>
    </div>
     <div class="col-md-4">
      <label for="" class="col-form-label-sm">Retorno:Ag Viaje / Aerolínea:</label>
      <input type="text" value="LC Peru" class="form-control form-control-sm" id="validationDefault04" placeholder="State" required>
    </div>
    <div class="col-md-1">
      <label for="" class="col-form-label-sm">Vuelo:</label>
      <input type="text" value="W42193" class="form-control form-control-sm" id="validationDefault04" placeholder="State" required>
    </div>
         <div class="col-md-4">
      <label for="" class="col-form-label-sm">Lugar del Evento / Auditorio</label>
      <input type="text" value="AUDITORIO CENTRAL CACP PERÚ" class="form-control form-control-sm" id="validationDefault05"  required>
    </div>
    </div>
    <div class="form-row">
    <div class="col-md-2">
      <label for="" class="col-form-label-sm"><span class="badge badge-secondary">Horarios del Evento:</span></label>
    </div>
    <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Mañana</label>
    <div class="col-sm-4">
      <input type="time" class="form-control form-control-sm" id="" value="09:00">
    </div>
        <label for="staticEmail" class="col-sm-2 col-form-label">Tarde</label>
    <div class="col-sm-4">
      <input type="time" class="form-control form-control-sm" id="" value="09:00">
    </div>
  </div>

    </div>


	<div class="bordee">
    <div class="form-row">

 <table class="">
  <thead>
    <tr>
      <th scope="col" ></th>
      <th scope="col" style="width: 4px; font-size: 14px">Hora Salida</th>
      <th scope="col" style="width: 4px; font-size: 14px">Hora Llegada</th>
      <th scope="col" style="width: 4px; font-size: 14px">Fecha Salida</th>
      <th scope="col" style="width: 4px; font-size: 14px">Fecha Llegada</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row" style="font-size: 14px">Retorno</th>
      <td><input type="time" class="form-control form-control-sm"></td>
      <td><input type="time" class="form-control form-control-sm"></td>
      <td><input type="date" class="form-control form-control-sm"></td>
      <td><input type="date" class="form-control form-control-sm"></td>
    </tr>
    <tr>
      <th scope="row" style="font-size: 14px">Salida</th>
      <td><input type="time" class="form-control form-control-sm"></td>
      <td><input type="time" class="form-control form-control-sm"></td>
      <td><input type="date" class="form-control form-control-sm"></td>
      <td><input type="date" class="form-control form-control-sm"></td>
    </tr>
  </tbody>
</table>
    </div>
    </div>
    </fieldset>
  </div>
  <div class="bordee">
  	  	<fieldset>
  		<legend><h6>III. MATERIALES DIDÁCTICOS Y EQUIPOS DE APOYO:</h6></legend>
    <div class="form-row">
    	
    <div class="col-md-2 ">
      <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Multimedia
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Pizarra Acrílica
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Puntero Láser
  </label>
</div>
    </div>
        <div class="col-md-2 ">
      <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    DVD
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Papel Bond
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Plumones
  </label>
</div>
    </div>
        <div class="col-md-5 ">
      <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Parlantes para proyección de audio
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Proyector Slide
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Equipo de Sonido (CD)
  </label>
</div>
    </div>
            <div class="col-md-3 ">
      <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Papelografo
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Micrófono
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Laptop
  </label>
</div>
    </div>


    </div>
    </fieldset>
  </div>
        <div class="modal-footer">
        <button type="button" id="" class="btn btn-outline-success">Agregar <span class="icon-checkmark"></span></button>
        <button type="button" id="" class="btn btn-outline-danger">Borrar <span class="icon-cross"></span></button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>
</form>
</div>

	</div>
</body>
</html>


<?php 
$hola = "<span>alv prro</span>";

$hola = strip_tags(strtoupper($hola));

echo $hola;
 ?>