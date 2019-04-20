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
      <th scope="col" style="width: 10px">Hora Salida</th>
      <th scope="col" style="width: 10px">Hora Llegada</th>
      <th scope="col" style="width: 10px">Fecha Salida</th>
      <th scope="col" style="width: 10px">Fecha Llegada</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Retorno</th>
      <td><input type="time" class="form-control form-control-sm"></td>
      <td><input type="time" class="form-control form-control-sm"></td>
      <td><input type="date" class="form-control form-control-sm"></td>
      <td><input type="date" class="form-control form-control-sm"></td>
    </tr>
    <tr>
      <th scope="row">Salida</th>
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

  <button class="btn btn-primary" type="submit">Submit form</button>
</form>
	</div>
</body>
</html>
